<?php

namespace Database\Seeders;

use App\Models\CardSize;
use Illuminate\Database\Seeder;


class CardSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CardSize::create(["name" => "Petit"]);
        CardSize::create(["name" => "Large", "width"=> 2]);
        CardSize::create(["name" => "Grand", "width"=> 2, "height"=>2]);
    }
}
