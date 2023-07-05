<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\Category::factory(5)->create();
        $categories =[
            'Tecnología', 'Desarrollo personal', 'Viajes y aventuras', 'Arte y cultura'
            ];

            foreach($categories as $category){
                    $cat = new Category();
                    $cat->name = $category;
                    $cat->description = fake()->sentence();
                    $cat->save();
            
            };
    }
}
