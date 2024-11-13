<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'user_id' => 1, // usersテーブルにidカラムの値が1のユーザーが存在することが前提
            'title' => fake()->realText(20, 5),
            'content' => fake()->realText(200, 5)
        ];
    }
}
