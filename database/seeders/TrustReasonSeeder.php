<?php

namespace Database\Seeders;


// database/seeders/TrustReasonSeeder.php
use Illuminate\Database\Seeder;
use App\Models\TrustReason;

class TrustReasonSeeder extends Seeder
{
    public function run(): void
    {
        $reasons = [
            ['title' => 'Expert Team', 'description' => 'Complete and experienced tax professionals.'],
            ['title' => 'Personalized Service', 'description' => 'Tailored support for your unique business needs.'],
            ['title' => 'Year-Round Support', 'description' => 'We are available anytime you need us.'],
        ];

        foreach ($reasons as $reason) {
            TrustReason::create($reason);
        }
    }
}

