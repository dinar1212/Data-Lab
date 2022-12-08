<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

        // user::create([
        //     ''
        // ]);

        User::create([
            'name' => 'PTIPD',
            'email' => 'ptipd@gmail.com',
            'password' => Hash::make('rahasia'),
            // 'role' => 'admin',
        ]);
    }
}
