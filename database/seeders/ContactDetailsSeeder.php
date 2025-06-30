<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContactDetails;

class ContactDetailsSeeder extends Seeder
{
    public function run(): void
    {
        ContactDetails::create([
            'phone' => '+1 (234) 567-8910',
            'email' => 'contact@elitetaxadvisory.com',
            'address' => '500 Elite Street, Suite 300, New York, NY',
            'facebook' => 'https://facebook.com',
            'instagram' => 'https://facebook.com',
            'linkedin' => 'https://linkedin.com/company/elitetaxadvisory',
        ]);
    }
}
