<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('settings')->insert([
            0 => [
                'id'         => 1,
                'site_name'  => 'IT Support',
                'site_url'   => 'http://itsupport.com',
                'email_to'   => 'egwuemijerryjude@gmail.com',
                'email_from' => 'jeremiah.egwuemi@dangoteprojects.com',
                'created_at' => '2017-07-25 15:12:19',
                'updated_at' => '2017-07-25 15:12:19',
            ],
     ]);
    }
}
