<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('index');})->name('index');
Route::get('/contact-us', function () {return view('contact-us');})->name('contact.index');
Route::get('/hiring', function () {return view('hiring');})->name('hiring.index');
Route::get('/projects', function () {
    $jsonPath = storage_path('app/projects.json');
    $projects = File::exists($jsonPath) ? json_decode(File::get($jsonPath), true) : [];

    // Ubah semua path gambar di JSON menjadi URL utuh (asset)
    $projects = array_map(function ($project) {
        $rawImages = $project['image'] ?? $project['images'] ?? [];
        if (!is_array($rawImages)) {
            $rawImages = [$rawImages];
        }

        // Map tiap path ke URL asset lengkap
        $project['image_urls'] = array_map(function ($img) {
            return asset(ltrim($img, '/'));
        }, $rawImages);

        return $project;
    }, $projects);

    return view('projects', compact('projects'));
})->name('projects.index');

Route::get('/news', function () {
    $jsonPath = storage_path('app/news.json');
    $newsList = File::exists($jsonPath) ? json_decode(File::get($jsonPath), true) : [];

    return view('news', compact('newsList'));
})->name('news.index');

// Route POST untuk memproses form dan kirim ke Discord
Route::post('/contact-send', [ContactController::class, 'sendToDiscord'])->name('contact.send');

