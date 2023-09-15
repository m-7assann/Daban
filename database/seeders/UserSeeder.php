<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'UsersName' => 'Mostafa Abo Hawedy',
            'email' => 'mostafa@app.com',
            'phone' => '0595718476',
            'role' => 'admin',
            'password' => Hash::make('1020'),
        ]);
        User::create([
            'UsersName' => 'Mohammad Hassan',
            'email' => 'mohammed@app.com',
            'phone' => '0599265058',
            'role' => 'admin',
            'password' => Hash::make('1234'),
        ]);
        User::create([
            'UsersName' => 'Mohammad Asker',
            'email' => 'mohammedasker@app.com',
            'phone' => '0567960628',
            'role' => 'admin',
            'password' => Hash::make('1235'),
        ]);
        User::create([
            'UsersName' => 'Osama AlDajani',
            'email' => 'osama@app.com',
            'phone' => '0597460927',
            'role' => 'admin',
            'password' => Hash::make('1230'),
        ]);
    }
}
