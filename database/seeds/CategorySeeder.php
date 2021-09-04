<?php

use Illuminate\Database\Seeder;
use App\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Shoes',
        	]);
         Category::create([
            'name' => 'Cosmetics',
        	]);
          Category::create([
            'name' => 'Cloth',
        	]);
           Category::create([
            'name' => 'Furniture',
        	]);
            Category::create([
            'name' => 'T-Shirt',
        	]);
    }
}
