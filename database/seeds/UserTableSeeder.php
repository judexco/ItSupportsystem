<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();

        \DB::table('users')->insert([
            0 => [
                'id'             => 1,
                'fullname'       => 'Admin',
                'email'          => 'admin@gmail.com',
                'password'       => bcrypt('admin'),
                'gender'         => 'M',
                'contactnum'       => '08011111111',
                'dept'        => 'IT',
                'jobtitle'        => 'IT Manager',
                'remember_token' => null,
                'created_at'     => '2017-07-25 15:12:19',
                'updated_at'     => '2017-07-25 15:12:19',
            ],
           1 => [
                'id'             => 2,
                'fullname'       => 'Ajiga',
                'email'          => 'ajiga@gmail.com',
                'password'       => bcrypt('ajiga12'),
                'gender'         => 'F',
                'contactnum'       => '08067888888',
                'dept'        => 'mech',
                'jobtitle'        => 'snr mech engr',
                'remember_token' => null,
                'created_at'     => '2016-08-29 13:42:19',
                'updated_at'     => '2016-08-29 13:42:19',
            ],

            2 => [
                'id'             => 3,
                'fullname'       => 'mikel',
                'email'          => 'mikel@gmail.com',
                'password'       => bcrypt('mikel12'),
                'gender'         => 'm',
                'contactnum'       => '0805555454',
                'dept'        => 'civil',
                'jobtitle'        => 'civil engr',
                'remember_token' => null,
                'created_at'     => '2016-08-29 13:42:19',
                'updated_at'     => '2016-08-29 13:42:19',
            ],
            3 => [
                'id'             => 4,
                'fullname'       => 'paddy',
                'email'          => 'paddy@gmail.com',
                'password'       => bcrypt('paddy12'),
                'gender'         => 'F',
                'contactnum'       => '0806787688',
                'dept'        => 'process',
                'jobtitle'       => 'snr process',
                'remember_token' => null,
                'created_at'     => '2016-08-29 13:42:19',
                'updated_at'     => '2016-08-29 13:42:19',
            ],
             4 => [
                'id'             => 5,
                'fullname'       => 'john',
                'email'          => 'john@gmail.com',
                'password'       => bcrypt('john12'),
                'gender'         => 'm',
                'contactnum'       => '0909876543',
                'dept'        => 'admin',
                'jobtitle'       => 'snr admin',
                'remember_token' => null,
                'created_at'     => '2016-08-29 13:42:19',
                'updated_at'     => '2016-08-29 13:42:19',
            ],

            5 => [
                'id'             => 6,
                'fullname'       => 'martha',
                'email'          => 'martha@gmail.com',
                'password'       => bcrypt('martha12'),
                'gender'         => 'F',
                'contactnum'       => '070654321',
                'dept'        => 'saftey',
                'jobtitle'       => 'safty officer',
                'remember_token' => null,
                'created_at'     => '2016-08-29 13:42:19',
                'updated_at'     => '2016-08-29 13:42:19',
            ],


           
        ]);
    }
}
