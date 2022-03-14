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
         \App\Models\User::factory(50)->create();
         \App\Models\category::factory(15)->create();
         \App\Models\post::factory(200)->create();
         \App\Models\Comment::factory(500)->create();
         
    }
}
