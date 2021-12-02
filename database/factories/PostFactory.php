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
<<<<<<< HEAD
        $title_uz = $this->faker->text(255);
        $post =  [
=======
        $images = [
            1 => '/files\featured1.png',
            2 => '/files\featured2.png',
            3 => '/files\featured3.png',
            4 => '/files\featured4.png',
            5 => '/files\featured5.png'
        ];

        $title_uz = $this->faker->sentence;
        return [
>>>>>>> 83ffd598740b2c6af6f1530699006778eafc4226
            'title_uz' => $title_uz,
            'title_ru' => $this->faker->sentence,
            'title_en' => $this->faker->sentence,

            'short_uz' => $this->faker->text(255),
            'short_ru' => $this->faker->text(255),
            'short_en' => $this->faker->text(255),

            'text_uz' => $this->faker->realText(2000),
            'text_ru' => $this->faker->realText(2000),
            'text_en' => $this->faker->realText(2000),

<<<<<<< HEAD
            'user_id' => User::factory(),
=======
            'user_id' => User::all()->random()->id,
>>>>>>> 83ffd598740b2c6af6f1530699006778eafc4226
            'category_id' => Category::all()->random()->id,

            'slug' => \Str::slug($title_uz),
            'img' => $images[rand(1, 5)],
        ];
        return $post;
    }
}
