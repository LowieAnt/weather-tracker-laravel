<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Weather;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         Weather::factory()->count(50)->create();
    }
}
