<?php

use Illuminate\Database\Seeder;
use App\Entities\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = factory(Comment::class, 1)->create();
    }
}
