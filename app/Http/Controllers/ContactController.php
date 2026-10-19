<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function sendToDiscord(Request $request)
    {
        // 1. Validasi input
        $validated = $request->validate([
            'full_name'      => 'required|string|max:255',
            'email'          => 'required|email|max:255',
            'company_name'   => 'nullable|string|max:255',
            'inquiry_type'   => 'nullable|string',
            'budget'         => 'nullable|string',
            'project_detail' => 'nullable|string',
            'preferred_date' => 'nullable|date|after_or_equal:today',
            'preferred_time' => 'nullable|date_format:H:i',
        ]);

        $webhookUrl = env('DISCORD_WEBHOOK_URL');

        if (!$webhookUrl) {
            if ($request->expectsJson()) {
                return response()->json(['success' => false, 'message' => 'URL Discord Webhook belum dikonfigurasi di .env!'], 400);
            }
            return back()->with('error', 'URL Discord Webhook belum dikonfigurasi di file .env!');
        }

        // Format jam untuk tampilan di Embed
        $formattedTime = !empty($validated['preferred_time']) ? $validated['preferred_time'] . ' WIB' : '-';

        // 2. Susun payload Discord Embed
        $discordPayload = [
            'content' => '🔔 <@548090807740268564> Ada pesanan/booking masuk baru!',
            'embeds' => [
                [
                    'title' => '🎮 New Booking Request - Karis Studio',
                    'color' => hexdec('21A099'), // Warna Teal
                    'fields' => [
                        [
                            'name'   => 'Full Name',
                            'value'  => $validated['full_name'],
                            'inline' => true,
                        ],
                        [
                            'name'   => 'Email',
                            'value'  => $validated['email'],
                            'inline' => true,
                        ],
                        [
                            'name'   => 'Company Name',
                            'value'  => !empty($validated['company_name']) ?: '-',
                            'inline' => true,
                        ],
                        [
                            'name'   => 'Type of Inquiry',
                            'value'  => $validated['inquiry_type'] ?: '-',
                            'inline' => true,
                        ],
                        [
                            'name'   => 'Estimated Budget',
                            'value'  => !empty($validated['budget']) ?: 'Pending further discussion.',
                            'inline' => true,
                        ],
                        [
                            'name'   => 'Preferred Date',
                            'value'  => $validated['preferred_date'] ?: '-',
                            'inline' => true,
                        ],
                        [
                            'name'   => 'Preferred Time',
                            'value'  => $formattedTime,
                            'inline' => true,
                        ],
                        [
                            'name'   => 'Project Details',
                            'value'  => !empty($validated['project_detail']) ?: '-',
                            'inline' => false,
                        ],
                    ],
                    'footer' => [
                        'text' => 'Karis Studio Booking System • ' . now()->format('d M Y, H:i'),
                    ],
                ],
            ],
        ];

        // 3. Kirim ke Discord Webhook
        try {
            $response = Http::withoutVerifying()
                ->timeout(10)
                ->post($webhookUrl, $discordPayload);

            // Discord Webhook sukses mengembalikan status 204 (No Content)
            if ($response->successful() || $response->status() == 204) {
                if ($request->expectsJson()) {
                    return response()->json([
                        'success' => true,
                        'message' => 'Booking berhasil dikirim ke Discord!',
                        'discord_status' => $response->status()
                    ]);
                }
                return back()->with('success', 'Booking berhasil dikirim! Tim Karis Studio akan segera menghubungi kamu.');
            }

            Log::error('Discord Webhook Error: ' . $response->body());

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Gagal mengirim ke Discord.',
                    'discord_status' => $response->status(),
                    'error_body' => $response->body()
                ], 400);
            }

            return back()->with('error', 'Gagal mengirim booking ke Discord. Response Code: ' . $response->status());
        } catch (\Exception $e) {
            Log::error('Discord Webhook Exception: ' . $e->getMessage());

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Terjadi kesalahan sistem: ' . $e->getMessage()
                ], 500);
            }

            return back()->with('error', 'Terjadi kesalahan sistem atau jaringan: ' . $e->getMessage());
        }
    }
}
