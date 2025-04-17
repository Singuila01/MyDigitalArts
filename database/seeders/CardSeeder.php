<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Card;
use Faker\Factory as Faker;

class CardSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Card::create([
                'title' => $faker->word,
                'description' => $faker->sentence,
                // 'image' => "https://placehold.co/600x400",
                'image' => "https://fydn.imgix.net/m%2Fgen%2Fart-print-std-portrait-p1%2F795dc3d1-40e2-4a81-b892-8464d767ee9c.jpg?auto=format%2Ccompress&q=75",
                //'category_id' => rand(1, 5),
                'video' => $faker->url,
                "user_id" => 1
            ]);
        }
    }
}
