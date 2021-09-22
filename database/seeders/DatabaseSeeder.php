<?php

namespace Database\Seeders;

use App\Models\Sujet;
use App\Models\User;
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
        User::factory()->state([
            'name' => "admin",
            'email' => "admin@gmail.com",
            'password' => bcrypt("admin@gmail.com"), // password
        ])->count(1)->create();

        Sujet::factory()->count(3)->create();
    }
}
