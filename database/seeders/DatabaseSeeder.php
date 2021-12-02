<?php

namespace Database\Seeders;

use App\Models\Category;
use Database\Factories\PostFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(StaticPageSeeder::class);
        $this->call(PostSeeder::class);
    }
}
