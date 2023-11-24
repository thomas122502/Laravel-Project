<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomersTableSeeder extends Seeder
{
    public function run()
    {
        // เพิ่มข้อมูลในตาราง customers
        DB::table('customers')->insert([
            [
                'fname' => 'Mus',
                'lname' => 'com',
                'email' => '6414421023@example.com',
                'phone_no' => '0987762541',
                'address' => '123 Main Street',
                'province' => 'California',
                'zipcode' => '178271',
                'location' => 'English',
                'password' => Hash::make('password123'),
            ],
            [
                'fname' => 'Pim',
                'lname' => 'com',
                'email' => '6414421027@example.com',
                'phone_no' => '0987762521',
                'address' => '123 Main Street',
                'province' => 'California',
                'zipcode' => '178271',
                'location' => 'English',
                'password' => Hash::make('password123'),
            ],
        ]);
    }
}
