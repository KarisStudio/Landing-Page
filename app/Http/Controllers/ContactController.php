<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function sendToDiscord(Request $request)
    {
        // 1. Validasi input disesuaikan dengan atribut name di Form Blade terbaru
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
            return back()->with('error', 'URL Discord Webhook belum dikonfigurasi di file .env!');
        }

        // Format jam untuk tampilan di Embed (contoh: "14:30 WIB")
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
                            'value'  => $validated['company_name'] ?: '-',
                            'inline' => true,
                        ],
                        [
                            'name'   => 'Type of Inquiry',
                            'value'  => $validated['inquiry_type'] ?: '-',
                            'inline' => true,
                        ],
                        [
                            'name'   => 'Estimated Budget',
                            'value'  => $validated['budget'] ?: 'Belum ditentukan',
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
                            'value'  => $validated['project_detail'] ?: '-',
                            'inline' => false,
                        ],
                    ],
                    'footer' => [
                        'text' => 'Karis Studio Booking System • ' . now()->format('d M Y, H:i'),
                    ],
                ],
            ],
        ];

        // 3. Kirim data ke Discord Webhook
        try {
            $response = Http::post($webhookUrl, $discordPayload);

            if ($response->successful()) {
                return back()->with('success', 'Booking berhasil dikirim! Tim Karis Studio akan segera menghubungi kamu.');
            }

            return back()->with('error', 'Gagal mengirim booking ke Discord. Response Code: ' . $response->status());
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan sistem: ' . $e->getMessage());
        }
    }
}
