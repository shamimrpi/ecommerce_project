<?php

use Illuminate\Database\Seeder;
use App\HeaderTop;
class HeaderTopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         	HeaderTop::create([
            'logo' => '',
            'phone' => '019251541525',
            'email' => 'linkuptechnology@gmail.com'
        	]);
    }
}
