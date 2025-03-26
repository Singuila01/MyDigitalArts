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
        CardCategory::create(["name" => "Street Art", "description" => "Fresque, art urbain", "enable" => "1"]);
        CardCategory::create(["name" => "Calligraphie", "description" => "Calligraphie", "enable" => "1"]);
        CardCategory::create(["name" => "Affiches", "description" => "Affiches", "enable" => "1"]);
        CardCategory::create(["name" => "Typographies", "description" => "Affiches", "enable" => "1"]);
        CardCategory::create(["name" => "Logos", "description" => "Logos", "enable" => "1"]);
        CardCategory::create(["name" => "Animations", "description" => "Gifs, visuels animes", "enable" => "1"]);
        CardCategory::create(["name" => "Noir et blancs", "description" => "Noir et blanc", "enable" => "1"]);
        CardCategory::create(["name" => "Illustrations", "description" => "Esquisses, aquarelles, bandes dessines", "enable" => "1"]);
        CardCategory::create(["name" => "Pop culture", "description" => "Films, jeux vidéo, references geek", "enable" => "1"]);
        CardCategory::create(["name" => "Fantastique et Mythologie", "description" => "Creatures mythiques, monde imaginaires", "enable" => "1"]);
        CardCategory::create(["name" => "Rétro et vintage", "description" => "Designs inspire des annees 50, 60, 70, etc", "enable" => "1"]);
        CardCategory::create(["name" => "Histoire et patrimoine", "description" => "Oeuvres inspurées du passe, monuments anciens", "enable" => "1"]);
        CardCategory::create(["name" => "Ciel et espace", "description" => "Etoiles, galaxies, phenomènes celestes", "enable" => "1"]);
        CardCategory::create(["name" => "Voyage et Exploration", "description" => "Paysages exotiques, decouvertes, culture", "enable" => "1"]);
        CardCategory::create(["name" => "Minimalisme", "description" => "Design épure, monochrome, simple et efficace", "enable" => "1"]);
        CardCategory::create(["name" => "Photographie urbaine", "description" => "Scene de ville, graffitis, ambiance urbaine", "enable" => "1"]);
        CardCategory::create(["name" => "Art abstrait", "description" => "Creations graphiques, formes, couleurs", "enable" => "1"]);
        CardCategory::create(["name" => "Technologie", "description" => "Illustrations futuriste, innovations, gadgets", "enable" => "1"]);
        CardCategory::create(["name" => "Architecture", "description" => "Batiments, monuments, structures", "enable" => "1"]);
        CardCategory::create(["name" => "Nature", "description" => "Paysages, faune, flore", "enable" => "1"]);
    }
}
