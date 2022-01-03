<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name'    => 'admin',
            'last_name'     => 'erp',
            'email'         => 'admin@email.com',
            'password'      => Hash::make('secret123'),
            'is_admin'      => 1
        ]);
        
        User::create([
            'first_name'    => 'customer',
            'last_name'     => 'erp',
            'email'         => 'customer@email.com',
            'password'      => Hash::make('secret123'),
            'is_customer'   => 1
        ]);
    }
}
