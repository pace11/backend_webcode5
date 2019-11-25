<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'title' => 'ReactJS',
            ],
            [
                'title' => 'AngularJS',
            ],
            [
                'title' => 'VueJS',
            ],
            [
                'title' => 'Laravel',
            ],
            [
                'title' => 'Golang',
            ],
            [
                'title' => 'Php',
            ]
        ]);
    }
}
