<?php

namespace Database\Seeders;

use App\Models\StaticPage;
use Database\Factories\StaticPageFactory;
use Illuminate\Database\Seeder;

class StaticPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StaticPage::factory()->times(20)->create();
    }
}
