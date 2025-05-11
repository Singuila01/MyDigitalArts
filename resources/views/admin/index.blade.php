@extends('layouts.header')

@section('content')
<div class="menu">
    <h1 class="">Bienvenue sur le tableau de bord administrateur</h1>
    <div class="sous_menu">
        <div class="zones utilisateurs">
            <div class="zone">
                <h3>Utilisateurs</h3>
                <div class="card-body">
                    <p>Nombre d'utilisateurs : <span>{{ $userCount }}</span></p>
                    <!-- <p class="card-text">Ajouter, modifier ou supprimer des utilisateurs.</p> -->
                    <a href="{{ route('admin.users.index') }}" class="lien-btn">Gestion des utilisateurs</a>
                </div>
            </div>
        </div>
        <div class="zones contenus">
            <div class="zone">
                <h3>Contenus</h3>
                <div class="card-body">
                    <a href="{{ route('admin.category.index') }}" class="lien-btn">Gestion des categories</a>
                </div>
            </div>
        </div>
        <div class="zones statistiques">
            <div class="zone">
                <h3>Statistiques</h3>
                <div class="card-body">
                    <h5 class="card-title">Voir les statistiques</h5>
                    <p class="card-text">Consulter les données et performances du site.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .menu h1{
        font-size: 35px;
        font-variant-caps: petite-caps;
        font-weight: 900;
        text-align: center;
    }
    .menu .sous_menu{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        margin: 20px;
        padding: 20px;
    }
    .menu .sous_menu .zones{
        background-color: #f8f9fa;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s;
    }
    .menu .sous_menu .zones.statistiques{
        grid-column: 1 / -1;
    }
    .menu .sous_menu h3{
        font-size: 30px;
        font-variant-caps: petite-caps;
        font-weight: 900;
        text-align: left;
        color: #555;
    }
    .menu .sous_menu .lien-btn{
        display: block;
        width: 100%;
        max-width: max-content;
        padding: 10px;
        margin: 10px auto 0;
        border-radius: 10px;
        background: #1F2937;
        color: #fff;
        transition: .2s all;
    }
    .menu .sous_menu .lien-btn:hover{
        background: #264164;
    }
</style>
@endsection