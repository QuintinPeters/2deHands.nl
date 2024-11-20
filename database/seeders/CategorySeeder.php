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
            ['category_name' => 'boeken'],
            ['category_name' => 'kleding'],
            ['category_name' => 'schoenen'],
            ['category_name' => 'accessoires'],
            ['category_name' => 'tassen'],
            ['category_name' => 'horloges'],
            ['category_name' => 'brillen'],
            ['category_name' => 'cosmetica'],
            ['category_name' => 'gezondheid'],
            ['category_name' => 'baby'],
            ['category_name' => 'kinderen'],
            ['category_name' => 'tieners'],
            ['category_name' => 'volwassenen'],
            ['category_name' => 'ouderen'],
            ['category_name' => 'huisdieren'],
            ['category_name' => 'tuin'],
            ['category_name' => 'keuken'],
            ['category_name' => 'badkamer'],
            ['category_name' => 'slaapkamer'],
            ['category_name' => 'woonkamer'],
            ['category_name' => 'eetkamer'],
            ['category_name' => 'kantoor'],
        ];

        foreach ($categories as $category) {
            category::create($category);
        }
    }
}
