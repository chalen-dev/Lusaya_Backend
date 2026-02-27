<?php

namespace Database\Seeders;

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
        $categories = [
            [
                'name' => 'How-to'
            ],
            [
                'name' => 'Sports'
            ],
            [
                'name' => 'Product Reviews'
            ],
            [
                'name' => 'Sports'
            ]
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insertOrIgnore($category);
        }
    }
}
