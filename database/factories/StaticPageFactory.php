<?php

namespace Database\Factories;

use App\Models\StaticPage;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class StaticPageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StaticPage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $pageType = random_int(1,2);
        $title_uz = $this->faker->text(255);

        $post =  [
            'title_uz' => $title_uz,
            'title_ru' => $this->faker->text(255),
            'title_en' => $this->faker->text(255),

            'text_uz' => $this->faker->paragraph,
            'text_ru' => $this->faker->paragraph,
            'text_en' => $this->faker->paragraph,

            'type' => $pageType,
            'slug' => \Str::slug($title_uz),
            'user_id' => User::factory(),
        ];

        if ($pageType == 2) {
            $post['sub_title_uz'] = $this->faker->text(255);
            $post['sub_title_ru'] = $this->faker->text(255);
            $post['sub_title_en'] = $this->faker->text(255);
            $post['imnage'] = $this->faker->image('public/files');
        }

        // dd($post);
        return $post;
    }
}
