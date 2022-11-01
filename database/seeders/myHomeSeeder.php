<?php

namespace Database\Seeders;

use App\Models\camera;
use App\Models\cooler;
use App\Models\fan;
use App\Models\fridge;
use App\Models\inLamp;
use App\Models\outLamp;
use App\Models\tv;
use App\Models\washingMachine;
use Illuminate\Database\Seeder;

class myHomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camera_1 = camera::create([
            'id' => '1',
            'name' => 'street',
            'persianName' => 'در جلو',
            'status' => false,
            'connectionStatus' => '1',
            'timeLapseStatus' => '0',
            'nightVision' => '0',
        ]);
        $camera_2 = camera::create([
            'id' => '2',
            'name' => 'room',
            'persianName' => 'در عقب',
            'status' => false,
            'connectionStatus' => '1',
            'timeLapseStatus' => '1',
            'nightVision' => '0',
        ]);
        $in_lamp_1 = inLamp::create([
            'id' => '1',
            'name' => 'in_lamp_1',
            'persianName' => 'آشپزخانه',
            'status' => false,
            'connectionStatus' => '1',
            'dim' => '87',
            'dailyAvrage' => '3',
            'voltageRange' => '120',
            'powerConsumption' => '24',
        ]);
        $in_lamp_2 = inLamp::create([
            'id' => '2',
            'name' => 'in_lamp_2',
            'persianName' => 'پذیرایی',
            'status' => false,
            'connectionStatus' => '1',
            'dim' => '41',
            'dailyAvrage' => '1',
            'voltageRange' => '120',
            'powerConsumption' => '18',
        ]);
        $in_lamp_3 = inLamp::create([
            'name' => 'in_lamp_3',
            'persianName' => 'هال',
            'status' => false,
            'connectionStatus' => '1',
            'dim' => '53',
            'dailyAvrage' => '2',
            'voltageRange' => '120',
            'powerConsumption' => '24',
        ]);
        $in_lamp_4 = inLamp::create([
            'name' => 'in_lamp_4',
            'persianName' => 'اتاق خواب',
            'status' => false,
            'connectionStatus' => '1',
            'dim' => '63',
            'dailyAvrage' => '0.5',
            'voltageRange' => '120',
            'powerConsumption' => '15',
        ]);
        $in_lamp_5 = inLamp::create([
            'name' => 'in_lamp_5',
            'persianName' => 'حمام',
            'status' => false,
            'connectionStatus' => '1',
            'dim' => '71',
            'dailyAvrage' => '1',
            'voltageRange' => '120',
            'powerConsumption' => '18',
        ]);
        $out_lamp_1 = outLamp::create([
            'id' => '100',
            'name' => 'out_lamp_1',
            'persianName' => 'در جلو',
            'status' => false,
            'connectionStatus' => '1',
            'voltageRange' => '120',
            'powerConsumption' => '18',
        ]);
        $out_lamp_2 = outLamp::create([
            'name' => 'out_lamp_2',
            'persianName' => 'در عقب',
            'status' => false,
            'connectionStatus' => '0',
            'voltageRange' => '120',
            'powerConsumption' => '18',
        ]);
        $out_lamp_3 = outLamp::create([
            'name' => 'out_lamp_3',
            'persianName' => 'باغچه',
            'status' => false,
            'connectionStatus' => '1',
            'voltageRange' => '120',
            'powerConsumption' => '30',
        ]);
        $out_lamp_4 = outLamp::create([
            'name' => 'out_lamp_4',
            'persianName' => 'پارکینگ',
            'status' => false,
            'connectionStatus' => '1',
            'voltageRange' => '120',
            'powerConsumption' => '18',
        ]);
        $cooler_1 = cooler::create([
            'name' => 'cooler_1',
            'persianName' => 'هال',
            'desiredTemperature' => '22',
            'currentTemperature' => '25',
        ]);
        $cooler_2 = cooler::create([
            'name' => 'cooler_2',
            'persianName' => 'اتاق خواب',
            'desiredTemperature' => '26',
            'currentTemperature' => '24',
        ]);
        $fan_1 = fan::create([
            'name' => 'fan-kitchen',
            'persianName' => 'آشپزخانه',
            'dim' => '2',
            'connectionStatus' => '1',
            'status' => true,
        ]);
        $fan_2 = fan::create([
            'name' => 'fan-bathroom',
            'persianName' => 'حمام',
            'dim' => '2',
            'connectionStatus' => '1',
            'status' => true,
        ]);
        $tv_1 = tv::create([
            'name' => 'tv-1',
            'persianName' => 'تلویزیون اتاق',
            'channel' => 'پویا',
            'status' => true,
        ]);
        $tv_2 = tv::create([
            'name' => 'tv-2',
            'persianName' => 'تلویزیون هال',
            'channel' => 'ورزش',
            'recordStatus' => '1',
            'volume' => '26',
            'status' => true,
        ]);
        $fridge_1 = fridge::create([
            'name' => 'home-fridge',
            'persianName' => 'یخچال',
            'temperature' => '8',
            'connectionStatus' => '1',
            'status' => true,
        ]);
        $washingMachine_1 = washingMachine::create([
            'name' => 'wash-machine',
            'persianName' => 'لباسشویی',
            'weight' => '5.2',
            'washingProgram' => 'Cotton Quick',
            'timeRemaining' => '01:17:08',
            'isPause' => false,
            'status' => true,
        ]);
    }
}
