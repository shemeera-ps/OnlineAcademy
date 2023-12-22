<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id'=>Category::inRandomOrder()->first()->id,
            'name'=>fake()->sentences(3,true),
            'short_description'=>fake()->paragraphs(2,true),
            'long_description'=>fake()->paragraphs(8,true),
            'image'=>'post.jpg',
        ];
    }
}
