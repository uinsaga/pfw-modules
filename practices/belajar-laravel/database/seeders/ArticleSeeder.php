<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [
                "image" => "https://picsum.photos/450/300",
                "title" => "Fancy Product 1",
                "description" => "Fancy Product Content",
            ],
            [
                "image" => "https://picsum.photos/450/300",
                "title" => "Fancy Product 2",
                "description" => "Special Item Content",
            ],
            [
                "image" => "https://picsum.photos/450/300",
                "title" => "Fancy Product 3",
                "description" => "Fancy Product Content",
            ],
            [
                "image" => "https://picsum.photos/450/300",
                "title" => "Fancy Product 4",
                "description" => "Special Item Content",
            ],
            [
                "image" => "https://picsum.photos/450/300",
                "title" => "Fancy Product 5",
                "description" => "Fancy Product Content",
            ],
            [
                "image" => "https://picsum.photos/450/300",
                "title" => "Fancy Product 6",
                "description" => "Special Item Content",
            ],
            [
                "image" => "https://picsum.photos/450/300",
                "title" => "Fancy Product 7",
                "description" => "Fancy Product Content",
            ],
            [
                "image" => "https://picsum.photos/450/300",
                "title" => "Fancy Product 8",
                "description" => "Special Item Content",
            ],
        ];

        foreach ($articles as $article) {
            DB::table("articles")->insert($article);
        }
    }
}
