<?php

namespace Database\Seeders;

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
        for($x=0; $x<=9; $x++) {
            \App\Models\NumberSpecificationModel::factory()->create([
                "set_number" => $x
            ]);
        }

    }
}
