<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // make admin
        User::create([
            'username' => 'shafii',
            'phone' => '0712345678',
            'password' => '12345678',
            'status' => 'admin',
        ]);
    }
}
