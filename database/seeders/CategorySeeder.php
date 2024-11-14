<?php

namespace Database\Seeders;
use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [

            ['category_name' => 'electronica'],
            ['category_name' => 'speelgoed'],
            ['category_name' => 'meubels'],
            ['category_name' => 'sieraden'],
            ['category_name' => 'sport'],
            ['category_name' => 'muziek'],
            ['category_name' => 'kunst'],        
            ['category_name' => 'overig'],

        ];

        foreach ($categories as $category) {
            category::create($category);
        }
    }
}
