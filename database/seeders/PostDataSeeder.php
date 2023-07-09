<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Создание Категорий
        $data_cat = [
            [
                'title' => 'Транспорт',
            ],
            [
                'title' => 'Люди',
            ],
            [
                'title' => 'Обучение',
            ],
            [
                'title' => 'Природа',
            ],
        ];

        foreach ($data_cat as $item) {
            Category::firstOrCreate($item);
        }
    
        // Создание Тэгов
        $data_tag = [
            [
                'title' => 'Книги',
            ],
            [
                'title' => 'Музыка',
            ],
            [
                'title' => 'Профессия',
            ],
            [
                'title' => 'Животные',
            ],
        ];

        foreach ($data_tag as $item) {
            Tag::firstOrCreate($item);
        }
    
        // Создание Постов
        $data_post = [
            [
                'title' => 'Первый пост',
                'content' => 'Контент первого поста',
                'category_id' => 1,
            ],
            [
                'title' => 'Второй пост',
                'content' => 'Контент второго поста',
                'category_id' => 2,
            ],
            [
                'title' => 'И еще один пост',
                'content' => 'Какой то текст в качестве контента',
                'category_id' => 4,
            ],
        ];
    
        foreach ($data_post as $item) {
            Post::firstOrCreate($item);
        }
    }
}
