<?php

use App\Location;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createLocation = new Location();
        $createLocation->name = 'Refinery Site';
        $createLocation->save();

        $createLocation = new Location();
        $createLocation->name = 'Ikoyi';
        $createLocation->save();

        $createLocation = new Location();
        $createLocation->name = 'Sapphire';
        $createLocation->save();

        $createLocation = new Location();
        $createLocation->name = 'Fertilizer';
        $createLocation->save();

        $createLocation = new Location();
        $createLocation->name = 'TCF';
        $createLocation->save();
    }
}
