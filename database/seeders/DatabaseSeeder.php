<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // factory(Series::class, 10)->create();
        \App\Models\Series::factory(10)->create()->each(function($series){
            $series->videos()->saveMany(\App\Models\Video::factory(10)->make());
        });
        
    }
}
