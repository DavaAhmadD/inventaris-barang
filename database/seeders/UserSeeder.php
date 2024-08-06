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
        $administrator = User::create([
            'name'=>'administrator', 
            'email'=>'administrator@gmail.com', 
            'password'=>bcrypt('administrator123')
        ]);
        $administrator->assignRole('administrator');

        $operator = User::create([
            'name'=>'operator', 
            'email'=>'operator@gmail.com', 
            'password'=>bcrypt('operator123')
        ]);
        $operator->assignRole('operator');

        $petugas = User::create([
            'name'=>'petugas', 
            'email'=>'petugas@gmail.com', 
            'password'=>bcrypt('petugas123')
        ]);
        $petugas->assignRole('petugas');
    }
}
