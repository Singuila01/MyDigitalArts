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
            $a = rand(4, max: 10);
            $b =  rand(4, max: 10);
            $assets = [
                'image' => "https://placebear.com/".($a*100)."/".($b*100),
            ];
            if(rand(0, max: 1) == 1){
                $assets = ["video" => "https://www.youtube.com/watch?v=2g8v0j1x4aQ"];
            }
            Card::create(array_merge([
                'title' => $faker->word,
                'description' => $faker->sentence,
                "user_id" => 1
            ], $assets)
            );
        }
    }
}
