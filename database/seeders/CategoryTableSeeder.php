<?php

namespace Database\Seeders;

use App\Functions\Helper;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['assistenza', 'vendita', 'supporto', 'reclami', 'amministrazione', 'marketing'];

        foreach ($categories as $category) {
            $new_category = new Category();
            $new_category->name = $category;
            $new_category->slug = Helper::generateSlug($new_category->name, Category::class);
            $new_category->save();
        }
    }
}
