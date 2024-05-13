<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $trains = [
            [
                'company' => 'TRENITALIA',
                'from_station' => 'PADOVA',
                'to_station' => 'CUNEO',
                'departure' => '2024/05/13 14:30:00',
                'arrive' => '2024/05/13 18:30:00',
                'train_code' => 'ABC778',
                'carriage_number' => 15,
                'is_punctual' => 1,
                'deleted' => 0,
            ],
            [
                'company' => 'ITALO',
                'from_station' => 'COMO',
                'to_station' => 'GENOVA',
                'departure' => '2024/05/13 11:30:00',
                'arrive' => '2024/05/13 16:30:00',
                'train_code' => 'ABC556',
                'carriage_number' => 17,
                'is_punctual' => 1,
                'deleted' => 0,
            ]
        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->company = $train['company'];
            $newTrain->from_station = $train['from_station'];
            $newTrain->to_station = $train['to_station'];
            $newTrain->departure = $train['departure'];
            $newTrain->arrive = $train['arrive'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->carriage_number = $train['carriage_number'];
            $newTrain->is_punctual = $train['is_punctual'];
            $newTrain->deleted = $train['deleted'];
            $newTrain->save();
        }
    }
}
