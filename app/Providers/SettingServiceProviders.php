<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class SettingServiceProviders extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        try {
            // تأكد أن جدول settings موجود قبل الاستعلام
            if (Schema::hasTable('settings')) {
                $setting = \App\Models\Setting::first(); // أو find(1)
                View::share('setting', $setting);
            }
        } catch (\Throwable $e) {
            logger()->error('Error loading settings: '.$e->getMessage());
        }
    }
}
