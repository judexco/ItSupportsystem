<?php

use App\Businessu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createBusinessu = new Businessu();
        $createBusinessu->name = 'Refinery';
        $createBusinessu->save();

        $createBusinessu = new Businessu();
        $createBusinessu->name = 'Fetilizer';
        $createBusinessu->save();

        $createBusinessu = new Businessu();
        $createBusinessu->name = 'Project';
        $createBusinessu->save();
    }
}
