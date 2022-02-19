<?php

use Faker\Generator as Faker;

use Illuminate\Database\Seeder;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for ( $i = 0 ; $i < 10; $i++) {

            $vehicle_types = [
                'Airplane',
                'Boat',
                'Car',
                'Train'
            ];
            
            $new_travel = new Travel();
            $new_travel->from_city = $faker->city();
            $new_travel->to_city = $faker->city();
            $new_travel->distance = rand(130, 9999);
            $new_travel->vehicle = $faker->randomElement($vehicle_types);
            $new_travel->date_start = $faker->dateTime();
            $new_travel->date_end = $faker->dateTime();
            $new_travel->price = rand(123, 900);
            $new_travel->save();
        }

    }
}
