<?php

namespace Database\Seeders;

use App\Models\FooterSection;
use Illuminate\Database\Seeder;

class FooterSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FooterSection::create([
            'phone' => '+1 (123) 456-7890',
            'email' => 'info@elitetaxadvisory.com',
            'address' => '123 Business Rd, Suite 100',
            'facebook' => 'https://facebook.com/elitetaxadvisory',
            'linkedin' => 'https://linkedin.com/company/elitetaxadvisory',
        ]);
    }
}
