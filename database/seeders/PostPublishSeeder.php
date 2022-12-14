<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostPublishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([

            'title' => 'Publicação de Teste',

            'description' => 'Descrição de teste.',

            'user_id' => 13
        ]);
    }
}
