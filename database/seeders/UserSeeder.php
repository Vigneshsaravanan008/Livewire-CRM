<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Vignesh',
            'email'=>'vignesh@gmail.com',
            'password'=>'12345678',
            'phone_number'=>'12345678',
        ]);
    }
}
