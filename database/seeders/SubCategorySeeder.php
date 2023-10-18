<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubCategory::factory()->create([
            'type' => 'Vestes'
        ]);

        SubCategory::factory()->create([
            'type' => 'Gilets'
        ]);

        SubCategory::factory()->create([
            'type' => 'Chemises'
        ]);

        SubCategory::factory()->create([
            'type' => 'Robe'
        ]);

        SubCategory::factory()->create([
            'type' => 'Tunique'
        ]);


        SubCategory::factory()->create([
            'type' => 'Vestes Femme'
        ]);
    }
}
