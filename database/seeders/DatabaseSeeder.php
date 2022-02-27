<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->truncate();
        $this->call(TestdataTableSeeder::class);
        // \App\Models\Advance::factory(35)->create();
    }
}
