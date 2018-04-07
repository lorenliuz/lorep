<?php

use Illuminate\Database\Seeder;
use App\Entities\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = factory(Tag::class, 100)->create();
    }
}
