<?php

use Illuminate\Database\Seeder;
use App\User;
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
            'first_name' => 'Md. Shamim',
            'Last_name' => 'Miah',
            'email' => 'linkuptechnology@gmail.com',
            'password' => Hash::make('12345678'),
            'usertype' => 'Admin',

        	]);
    }
}
