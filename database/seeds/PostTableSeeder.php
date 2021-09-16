<?php

use App\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $nameSocialList = ['whatsapp', 'instagram', 'twitter', 'facebook', 'linkedin', 'snapchat'];

        for($i = 0; $i < 50; $i++){
            $randNameSocialKey = array_rand($nameSocialList, 1);
            $postObject = new Post();
            $postObject->name_social=$nameSocialList[$randNameSocialKey];
            $postObject->category=$faker->word();
            $postObject->user=$faker->word();
            $postObject->date=$faker->date();
            $postObject->picture=$faker->imageUrl(640, 480, 'text', true);
            $postObject->description=$faker->paragraph(3);
            $postObject->save();
        }
    }
}

