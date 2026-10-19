<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // <-- Tambahkan ini

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Memaksa skema HTTPS jika berada di production
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }
    }
}
