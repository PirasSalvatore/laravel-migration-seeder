<?php

namespace Database\Seeders;


use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        
        for ($i = 0; $i < 100; $i++) {
            $newTrain = new Train();
            $newTrain->agency = $faker->randomElement(['Trenitalia', 'Italo', 'Frecciarossa', 'Frecciargento', 'Frecciabianca']);
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeBetween('now', '+1 month');
            $newTrain->arrival_time = $faker->dateTimeBetween($newTrain->departure_time, '+1 month');
            $newTrain->train_code = strtoupper($faker->bothify('??###'));
            $newTrain->carriages = $faker->numberBetween(5, 10);
            $newTrain->in_time = $faker->boolean(80); // 80% chance the train is in time
            $newTrain->deleted = $faker->boolean(10); // 10% chance the train is deleted
            $newTrain->save();
        }

    }
}
