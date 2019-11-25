<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'first_name' => 'Muhammad Iriansyah',
                'last_name' => 'Muhammad Iriansyah',
                'user_name' => 'ryanpace11',
                'email' => 'ryanjoker87@gmail.com',
                'password' => crypt('pace1996', 'code5blog2019'),
                'role' => 'admin',
                'gender' => 'male',
            ],
            [
                'first_name' => 'Firman Giri',
                'last_name' => 'Febriyanto',
                'user_name' => 'firmangirif',
                'email' => 'firmangiri@gmail.com',
                'password' => crypt('firman1996', 'code5blog2019'),
                'role' => 'user',
                'gender' => 'male',
            ],
            [
                'first_name' => 'Fahmi Roihanul',
                'last_name' => 'Firdaus',
                'user_name' => 'rehan',
                'email' => 'rehan@gmail.com',
                'password' => crypt('mampang2', 'code5blog2019'),
                'role' => 'user',
                'gender' => 'male',
            ],
        ]);
    }
}
