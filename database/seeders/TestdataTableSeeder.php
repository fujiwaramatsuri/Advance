<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TestdataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call( TestdataTableSeeder::class);
        Advance::factory()->count(35)->create();
        //
        $param =
            [
                'fullname' => '名前',
                'gender' => '1',
                'email' => 'test@email.com',
                'postcode' => '12345678',
                'address' => '住所',
                'building_name' => '建物名',
                'opinion' => '備考欄dsfかいおjあああああああああああああああああgl',
                'created_at' => now(),
                'updated_at' => now(),
            ];
            DB::table('contacts')->insert($param);
    }
}
