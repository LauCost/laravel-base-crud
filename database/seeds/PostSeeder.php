<?php

use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //

        for ($i = 0; $i < 4; $i++) {
            # code...
            $post = new Post();
            $post->title = $faker->sentence();
            $post->text = $faker->paragraphs(10, true);
            $post->save();
        }
    }
}
