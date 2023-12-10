<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productTypes = [
            [
                'name' => 'Pipe',
                'description' => 'Product Type 1 Description',
            ],
            [
                'name' => 'Flange',
                'description' => 'Product Type 2 Description',
            ],
            [
                'name' => 'Nut',
                'description' => 'Product Type 3 Description',
            ],
        ];

        foreach ($productTypes as $productType) {
            \App\Models\ProductType::create($productType);
        }
    }
}
