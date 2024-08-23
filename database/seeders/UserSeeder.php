<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ebieth',
            'username' => 'ebieth',
            'email' => 'ebiethslank@gmail.com',
            'email_verified_at' => now(),
            'password'=> Hash::make('password'),
            'remember_token' => str::random(10)
        ]);

        User::factory(5)->create();
    }
}