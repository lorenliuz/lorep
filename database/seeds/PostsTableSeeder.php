<?php

use Illuminate\Database\Seeder;
use App\Entities\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = factory(Post::class, 100)->create();
    }
}
