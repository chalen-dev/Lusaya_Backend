<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Hellow Sir',
                'text' => 'Musta ang life?',
                'category_id' => 2,
            ],
            [
                'title' => 'Yap yap yap',
                'text' => 'Whine whine whine',
                'category_id' => 3,
            ],
            [
                'title' => 'Life\'s good',
                'text' => 'Bla bla bla bla bla',
                'category_id' => 4,
            ],
            [
                'title' => 'Lipsum',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci odio, dignissim ut est a, eleifend tristique ipsum. Nulla facilisi. Praesent mollis varius turpis, vitae faucibus nibh. Nunc ex arcu, iaculis vitae lacinia in, iaculis non nulla. Ut sollicitudin ut sapien sed .',
                'category_id' => 5,
            ],

        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
