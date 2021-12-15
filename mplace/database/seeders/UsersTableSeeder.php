<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            // Admin
            [
                'first_name' => 'João',
                'last_name' => 'Vieira',
                'email' => 'admin@email.com',
                'password' => Hash::make('123123123'),
                'phone' => '(21) 97969-0623',
                'profile_photo_path' => 'https://via.placeholder.com/68x68.png/0044bb?text=joao',
                'role' => 'admin',
                'status' => 'active'
            ],
            // Vendor
            [
                'first_name' => 'Luiz',
                'last_name' => 'Ricardo',
                'email' => 'vendor@email.com',
                'password' => Hash::make('123123123'),
                'phone' => '(21) 97969-0623',
                'profile_photo_path' => 'https://via.placeholder.com/68x68.png/0044bb?text=luiz',
                'role' => 'vendor',
                'status' => 'active'
            ],
            // Affiliate
            [
                'first_name' => 'Davi',
                'last_name' => 'Labanca',
                'email' => 'affiliate@email.com',
                'password' => Hash::make('123123123'),
                'phone' => '(21) 97969-0623',
                'profile_photo_path' => 'https://via.placeholder.com/68x68.png/0044bb?text=davi',
                'role' => 'affiliate',
                'status' => 'active'
            ],
            // Customer
            [
                'first_name' => 'Lucas',
                'last_name' => 'Araújo',
                'email' => 'customer@email.com',
                'password' => Hash::make('123123123'),
                'phone' => '(21) 97969-0623',
                'profile_photo_path' => 'https://via.placeholder.com/68x68.png/0044bb?text=lucas',
                'role' => 'customer',
                'status' => 'active'
            ],
        ]);
    }
}
