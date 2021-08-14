<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(2),
            'url' => $this->faker->url,
            'excerpt' => $this->faker->sentence(10),
            'content' => [
                'header' => 'https://picsum.photos/800/400',
                'content' => $this->faker->paragraph(50),
            ],
        ];
    }
}
