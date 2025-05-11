@extends('layouts.header')

@section('title', 'À propos')

@section('content')
<div class="container_content">
    <h1>À propos de nous</h1>
    <p>Bienvenue sur notre site MyDigitalArt !</p>
    <p>Nous sommes une plateforme dédiée à la présentation des différentes fillières créatives au sein de l'école MyDigitalSchool. Notre mission est de mettre en avant les créations des différents étudiants.</p>
    <h2>Notre vision</h2>
    <p>Créer un espace où l'art numérique peut prospérer et être apprécié par tous.</p>
</div>

<style>
    .container_content {
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        line-height: 1.6;
    }
    .container_content h1 {
        text-align: center;
        font-weight: 800;
        font-size: 2.5em;
        color: #2c3e50;
        margin-bottom: 10px;
    }
    .container_content p {
        font-size: 19px;
    }
    .container_content h2 {
        font-weight: 700;
        font-size: 30px;
        color: #34495e;
        margin-top: 20px;
    }
</style>
@endsection