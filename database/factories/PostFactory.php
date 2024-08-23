<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    $title = $this->faker->sentence;
    return [
      'title' => $title,
      'slug' => Str::slug($title),
      'image' => 'https://via.placeholder.com/640x480',
      'content' => $this->faker->paragraphs(5, true),
      'user_id' => User::pluck('id')->random(),
      'category_id' => Category::pluck('id')->random(),
    ];
  }
}
