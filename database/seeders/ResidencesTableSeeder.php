<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Residence;

class ResidencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Residence::factory(10)->create();
    }
}
