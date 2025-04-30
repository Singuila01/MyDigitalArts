@extends('layouts.header')

@section('content')
    <div class="zone-btn">
        <a href="/admin/dashboard" class="lien-btn retour">Retour en arrière</a>
        <a href="/admin/category/create" class="lien-btn add">Ajouter une catégorie</a>
    </div>
    @if (isset($categories))
        @if ($categories != null)
            <!-- <ul> -->
            <table>
                <thead>
                    <tr>
                        <td>Nom</td>
                        <td>Description</td>
                        <td>Actif</td>
                        <td colspan="2">Action</td>
                    </tr>
                </thead>
            
            @foreach ($categories as $category)
                <tbody>
                    <tr>
                        <td>
                            <h1 class="">{{ $category->name }}</h1>
                        </td>
                        <td>
                            <p class="">{{ $category->description }}</p>
                        </td>
                        <td>
                            <p class="">{{ $category->enable }}</p>
                        </td>
                        <!-- <td>
                            </td> -->
                        <td class="action">
                            <a href="{{ route('admin.category.edit', $category->id) }}" class="edit">Editer</a>
                            <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST" style="margin-top: 10px;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
            </table>
            <!-- </ul> -->
        @else
            <div class="alert alert-warning" role="alert">
                Aucune catégorie trouvé.
            </div>
        @endif
    @else
        <div class="alert alert-danger" role="alert">
            Une erreur s'est produite lors de la récupération des catégories.
        </div>
    @endif

    <style>
       .zone-btn{
            display: flex;
            flex-flow: row nowrap;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }
        .lien-btn{
            display: block;
            padding: 5px 10px;
            margin: 10px;
            max-width: max-content;
            width: 100%;
            font-weight: 900;
            font-variant-caps: petite-caps;
            color: #fff;
            letter-spacing: 1.2px;
            transition: .15s ease;
        }
        .lien-btn.retour{
            background: transparent;
            color: #000;
        }
        .lien-btn.add{
            background: #1F2937;
        }
        .lien-btn.add:hover{
            background: #4B5563;
            font-weight: 800;
        }
        ul{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            list-style: none;
            padding: 0;
            position: relative;
        }
        table{
            margin: 0 auto;
            max-width: 800px;
        }
        table .action{
            display: flex;
            flex-flow: row nowrap;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }
        table thead tr{
            background: #1F2937;
        }
        table tbody td form{
            padding: 0 !important;
            margin: 0 !important;
        }
        table thead tr td{
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        table tbody tr td{
            padding: 10px;
        }
        table tbody tr:nth-child(even){
            background: #f8f9fa;
        }
        table tbody tr:nth-child(odd){
            background: #e9ecef;
        }
        ul li a.edit{
            /* inset: 0 auto auto 0; */
            display: block;
            max-width: max-content;
            width: 100%;
            background: #007bff;
            color: #fff;
            margin: 20px 0 0;
            padding: 10px;
            border-radius: 10px;
        }
        ul li form button.delete {
            display: block;
            max-width: max-content;
            width: 100%;
            background: #dc3545;
            color: #fff;
            margin: 10px 0 0;
            padding: 10px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }
        ul li form button.delete:hover {
            background: #c82333;
        }
    </style>
@endsection