<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\Feature;

class ServiceAndFeatureSeeder extends Seeder
{
    public function run(): void
    {
        // Seed Services
        Service::insert([
            [
                'title' => 'Business Tax Return Filing',
                'description' => 'Preparation and filing of Forms 1120, 1120S, 1065, Schedule C, etc.',
                'icon' => 'fa-solid fa-file-invoice-dollar',
                'link' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Payroll Tax Compliance',
                'description' => 'Accurate payroll tax reporting with Forms 940, 941, W-2s, and 1099s.',
                'icon' => 'fa-solid fa-users-gear',
                'link' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Multi-State Tax Support',
                'description' => 'Compliance support for businesses operating across multiple states.',
                'icon' => 'fa-solid fa-map-location-dot',
                'link' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        // Seed Features
        Feature::insert([
            [
                'title' => 'Expert Advisors',
                'description' => 'We bring years of industry experience to help you grow.',
                'icon' => 'fa-solid fa-user-tie',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Year-Round Support',
                'description' => 'We’re with you every season, not just tax time.',
                'icon' => 'fa-solid fa-calendar-check',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Personalized Service',
                'description' => 'Tailored solutions based on your unique business needs.',
                'icon' => 'fa-solid fa-handshake',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}