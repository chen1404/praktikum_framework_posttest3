<?php

namespace Database\Seeders;

use App\Models\Broker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrokerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $broker = [
            [

                "name" => "BBCA",
                "frequency" => "7.428",
                "volume" => "27.074.400	",
                "value" => "224.053.285.000"
            ],
            [

                "name" => "BBRI",
                "frequency" => "3.804",
                "volume" => "26.631.400	",
                "value" => "118.720.773.000"
            ],
            [

                "name" => "GOTO",
                "frequency" => "1.767",
                "volume" => "64.059.200",
                "value" => "15.639.865.000"
            ]

        ];
        foreach ($broker as $bk) {
            Broker::firstOrCreate($bk);
        }
    }
}
