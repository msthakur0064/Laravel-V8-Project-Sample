<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('blog')->insert([
            'id' => 1,
            'categoryId' => 1,
            'title' => 'How To Write Food Blog',
            'slug' => 'how-to-write-food-blog',
            'image' => 'how-to-write-food-blog.png',
            'blog' => 'By recommending products they already use and love, food bloggers can earn passive income by sharing their affiliate links. Amazon.com is loaded with cooking ingredients and tools that everyone needs. Just by sending their traffic over, bloggers can earn a percentage of the sales.',
            'status' => 1
        ]);
        DB::table('blog')->insert([
            'id' => 2,
            'categoryId' => 2,
            'title' => 'How To Write Travel Blog',
            'slug' => 'how-to-write-travel-blog',
            'image' => 'how-to-write-travel-blog.png',
            'blog' => 'For the last six months, travel blogging is helping me earn somewhere between 20-50 thousand Indian Rupees a month. But the reality is that a travel blogger never knows how much money he is going to make the next month, or the month after that. It\'s one downside to working for yourself.',
            'status' => 1
        ]);
    }
}
