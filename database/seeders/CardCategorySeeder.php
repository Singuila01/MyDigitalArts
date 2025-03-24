<?php

namespace Database\Seeders;

use App\Models\CardCategory;
use Illuminate\Database\Seeder;

class CardCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CardCategory::create(["name" => "Visiteur"]);
        CardCategory::create(["name" => "Utilisateur"]);
        CardCategory::create(["name" => "Administrateur"]);
    }
}
