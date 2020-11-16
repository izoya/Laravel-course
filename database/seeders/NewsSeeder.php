<?php

namespace Database\Seeders;

use DB;
use Faker\Factory;
use Faker\Provider\Company;
use Illuminate\Database\Seeder;
use Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }

    private function getData()
    {
        $faker = Factory::create('en_US');
        $data = [];

        for ($i = 1; $i <= 60; $i++) {
            $title = $faker->catchPhrase;
            $content = $faker->realText(mt_rand(300, 500));
            $data[] = [
                'title' => $title,
                'slug' => $faker->unique()->passthrough(Str::slug(Str::limit($title, 50))),
                'image' => $faker->image('public/images/news', 300, 150, 'people', false),
                'description' => Str::limit($content, mt_rand(50, 150)),
                'content' => $content,
                'is_published' => true,
                'source_id' => mt_rand(1,10),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        return $data;
    }
}

