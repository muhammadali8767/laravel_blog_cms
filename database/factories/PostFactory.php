<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Media;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title_uz = $this->faker->text(255);
        return [
            'title_uz' => $title_uz,
            'title_ru' => $this->faker->text(255),
            'title_en' => $this->faker->text(255),

            'short_uz' => $this->faker->text(255),
            'short_ru' => $this->faker->text(255),
            'short_en' => $this->faker->text(255),

            'text_uz' => $this->faker->paragraph,
            'text_ru' => $this->faker->paragraph,
            'text_en' => $this->faker->paragraph,

            'slug' => \Str::slug($title_uz),
            'img' => $this->faker->image('public/files'),

            'user_id' => 1,
            'category_id' => Category::all()->random()->id,
        ];
    }
}
