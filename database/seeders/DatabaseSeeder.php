<?php

namespace Database\Seeders;

use Database\Seeders\AboutPageContentSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\SiteContentSeeder;
use Database\Seeders\AboutSectionSeeder;
use Database\Seeders\ServiceSeeder;
use Database\Seeders\TrustReasonSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
   // database/seeders/DatabaseSeeder.php
public function run(): void
{
    $this->call([

        TrustReasonSeeder::class,
    ]);
}

}
