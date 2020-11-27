<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\House;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        House::factory(10)->create();
    }
}
