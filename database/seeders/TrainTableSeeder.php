<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {



        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->word();
            $newTrain->from_station = $faker->city();
            $newTrain->to_station = $faker->city();
            $newTrain->departure = $faker->dateTimeInInterval('-0 days', '3 days');
            $newTrain->arrive = $faker->dateTimeInInterval('-0 days', '+3 days');
            $newTrain->train_code = $faker->bothify('???###');
            $newTrain->carriage_number = $faker->numberBetween(10, 20);
            $newTrain->is_punctual = $faker->boolean;
            $newTrain->deleted = $faker->boolean;
            $newTrain->save();

        }







        // $trains = [
        //     [
        //         'company' => 'TRENITALIA',
        //         'from_station' => 'PADOVA',
        //         'to_station' => 'CUNEO',
        //         'departure' => '2024/05/13 14:30:00',
        //         'arrive' => '2024/05/13 18:30:00',
        //         'train_code' => 'ABC778',
        //         'carriage_number' => 15,
        //         'is_punctual' => 1,
        //         'deleted' => 0,
        //     ],
        //     [
        //         'company' => 'ITALO',
        //         'from_station' => 'COMO',
        //         'to_station' => 'GENOVA',
        //         'departure' => '2024/05/13 11:30:00',
        //         'arrive' => '2024/05/13 16:30:00',
        //         'train_code' => 'ABC556',
        //         'carriage_number' => 17,
        //         'is_punctual' => 1,
        //         'deleted' => 0,
        //     ]
        // ];

        // foreach ($trains as $train) {
        //     $newTrain = new Train();
        //     $newTrain->company = $train['company'];
        //     $newTrain->from_station = $train['from_station'];
        //     $newTrain->to_station = $train['to_station'];
        //     $newTrain->departure = $train['departure'];
        //     $newTrain->arrive = $train['arrive'];
        //     $newTrain->train_code = $train['train_code'];
        //     $newTrain->carriage_number = $train['carriage_number'];
        //     $newTrain->is_punctual = $train['is_punctual'];
        //     $newTrain->deleted = $train['deleted'];
        //     $newTrain->save();
        // }
    }
}
