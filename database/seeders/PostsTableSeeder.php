<?php

namespace Database\Seeders;

use App\Models\Post;
use Database\Factories\PostFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('posts')->insert([
        //     'title'         => String::random(10),
        //     'description'   => String::random(30),
        //     'content'       => String::random(1048),
        //     'user_id'       => 1
        // ]);

        Post::factory()->times(10)->create();

    }
}
