<?php

namespace Database\Seeders;

use App\Enums\Categories;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = array_map(function ($category) {
            return ['name' => $category->value];
        }, Categories::cases());

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
