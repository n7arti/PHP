<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\Article::factory(100)->create()->make();
        \App\Models\Tag::factory(100)->create()->make();
        \App\Models\ArticleTag::factory(100)->create()->make();
        // \App\Models\User::factory(10)->create();
    }
}
