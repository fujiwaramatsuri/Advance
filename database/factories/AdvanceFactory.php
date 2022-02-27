<?php

namespace Database\Factories;
use App\Models\Advance;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdvanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    // protected $model = Advance::class;

    public function definition(){
        // $factory->define(Advance::class, function (Faker $faker) {
        return [
            'fullname' => $faker->name,
            'randomElement' => $faker->randomElement($array = ['男性', '女性']),
            'email' => $faker->email,
            'postcode' => $faker->postcode,
            'address' => $faker->address,
            'building_Address' => $faker->streetAddress,
            'opinion' => $faker->text(),
            'created_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
            'updated_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
            //
        ];
    }
}