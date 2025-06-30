<?php

namespace Database\Seeders;

// database/seeders/SiteContentSeeder.php
use Illuminate\Database\Seeder;
use App\Models\SiteContent;

class SiteContentSeeder extends Seeder
{
    public function run(): void
    {
        SiteContent::create([
            'title' => 'Reliable Tax Advisory for Small Businesses',
            'subtitle' => 'Helping you stay compliant and save on taxes with expert guidance.',
            'cta_button_text' => 'Schedule a Free Consultation',
            'cta_button_url' => '#',
        ]);
    }
}
