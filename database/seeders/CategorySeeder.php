<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('category')->insert([
            'id' => 1,
            'name' => 'Food',
            'slug' => 'food',
            'image' => 'food.png',
            'description' => 'It attracts a lot of readers who are interested in recipes, ingredients, healthy eating, fine dining, and other food related stories.',
            'status' => 1
        ]);
        DB::table('category')->insert([
            'id' => 2,
            'name' => 'Travel',
            'slug' => 'travel',
            'image' => 'travel.png',
            'description' => 'People are traveling more than ever, and they are always looking for travel tips, advice, and destination guides.',
            'status' => 1
        ]);
        DB::table('category')->insert([
            'id' => 3,
            'name' => 'Music',
            'slug' => 'music',
            'image' => 'music.png',
            'description' => 'Music lovers enjoy songs from different languages, cultures and norms.',
            'status' => 1
        ]);
        DB::table('category')->insert([
            'id' => 4,
            'name' => ' Movie',
            'slug' => 'movie',
            'image' => 'movie.png',
            'description' => 'Movie blogs share news and reviews of new movies and the film industry in general.',
            'status' => 1
        ]);
        DB::table('category')->insert([
            'id' => 5,
            'name' => 'Fitness',
            'slug' => 'fitness',
            'image' => 'fitness.png',
            'description' => 'Fitness blogs has been a hot trend since they cover important topics like health and general fitness.',
            'status' => 1
        ]);
        DB::table('category')->insert([
            'id' => 6,
            'name' => 'Lifestyle',
            'slug' => 'lifestyle',
            'image' => 'lifestyle.png',
            'description' => 'They have a variety of readers, interested in topics ranging from culture, arts, local news, and politics.',
            'status' => 1
        ]);
        DB::table('category')->insert([
            'id' => 7,
            'name' => 'Sports',
            'slug' => 'sports',
            'image' => 'sports.png',
            'description' => 'Every country in the world has different sports and every sport has its own stars. Sports blogging may also include bloggers who are writing paid content for teams, athletes, and other organizations.',
            'status' => 1
        ]);
        DB::table('category')->insert([
            'id' => 8,
            'name' => ' Finance',
            'slug' => 'finance',
            'image' => 'finance.png',
            'description' => ' This gives finance blogs a wide audience ranging from serious investors to families trying to save for a better future.',
            'status' => 1
        ]);
    }
}
