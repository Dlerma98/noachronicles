<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'summary' => $this->faker->paragraph,
            'content' => $this->faker->text,
            'thumbnail' => $this->faker->imageUrl(640, 480, 'video games', true), // URL de imagen
            'user_id' => User::factory(), // Relación con un autor
        ];
    }
}
