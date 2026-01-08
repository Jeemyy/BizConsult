<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate([
            'address' => "Address, Egypt",
            'phone' => '0123456789',
            'email' => 'email@gmail.com',
            'facebook' => 'facebook.com',
            'instagram' => 'instagram@gmail.com',
            'twitter' => 'twitter.com',
            'youtube' => 'youtube.com',
            'linkedin' => 'linkedin.com',
        ]);
    }
}
