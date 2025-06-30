<?php

namespace Database\Seeders;

// database/seeders/AboutSectionSeeder.php
use Illuminate\Database\Seeder;
use App\Models\AboutSection;

class AboutSectionSeeder extends Seeder
{
    public function run(): void
    {
        AboutSection::create([
            'description' => 'Elite Tax Advisory and Preparation LLC provides tailored tax services to help your business grow efficiently.',
            'highlight_title' => 'Business Tax Preparation',
            'highlight_description' => 'Provides tailored tax solutions to help your business grow.',
            'highlight_link_text' => 'Read more',
            'highlight_link_url' => '#',
        ]);
    }
}

