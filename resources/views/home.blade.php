@extends('layouts.header')

@section('title', 'Page d\'accueil')

@section('content')
<div class="container_content">
    <h1>Bienvenue sur <span>MyDigitalArt</span></h1>
    <p>Découvrez les créations graphiques des étudiants de MyDigitalSchool. Explorez leur talent et laissez-vous inspirer par leur créativité.</p>

    <div class="additional-content">
        <h2>À propos de MyDigitalArt</h2>
        <p>MyDigitalArt est une plateforme dédiée à la mise en valeur des talents des étudiants en design graphique. Nous croyons en la puissance de la créativité et en l'importance de partager des idées innovantes.</p>
        
        <h3>Nos objectifs :</h3>
        <ul>
            <li>Encourager l'expression artistique</li>
            <li>Fournir une vitrine pour les jeunes talents</li>
            <li>Créer une communauté de passionnés d'art numérique</li>
        </ul>
    </div>
</div>

<style>
    .container_content {
        font-family: Arial, sans-serif;
        color: #333;
        line-height: 1.6;
        margin: 20px;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
    }

    .container_content h1 {
        text-align: center;
        font-weight: 800;
        font-size: 2.5em;
        color: #2c3e50;
        margin-bottom: 10px;
    }
    .container_content h1 span {
        font-variant-caps: petite-caps;
        font-weight: 900;
    }
    .container_content p {
        font-size: 19px;
    }
    .additional-content h2 {
        font-weight: 600;
        font-size: 30px;
        color: #34495e;
        margin-top: 20px;
    }
    .additional-content h3 {
        font-weight: 600;
        font-size: 25px;
        color: #16a085;
        margin-top: 15px;
    }
    .additional-content ul {
        list-style-type: disc;
        margin-left: 20px;
    }
    .additional-content ul li {
        margin-bottom: 10px;
        font-size: 19px;
    }
</style>
@endsection