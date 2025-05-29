<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'name' => 'anam',
            'email' => 'anam@gmail.com',
            'password' => Hash::make('123456789'),
            'email_verified_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'syariful',
            'email' => 'syariful@gmail.com',
            'password' => Hash::make('123456789'),
            'email_verified_at' => now(),
        ]);
    }
}
