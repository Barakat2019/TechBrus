<?php

namespace Database\Seeders;

use Database\Factories\CommentFactory;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class FakeCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('wphpm_comments')->insert([
                'comment_post_ID' => $faker->randomDigit(),
                'comment_author' => $faker->firstName(),
                'comment_author_email' => $faker->email(),
                'comment_content' => $faker->sentence(),
                'comment_date' => $faker->dateTime(),
                'comment_date_gmt' => $faker->dateTime(),
            ]);
        }
    }
}
