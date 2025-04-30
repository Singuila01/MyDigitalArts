@extends('layouts.headeradmin')

@section('content')
    <div class="zone-btn">
        <a href="/admin/dashboard" class="lien-btn retour">Retour en arrière</a>
        <a href="/admin/users/create" class="lien-btn add">Ajouter un utilisateur</a>
    </div>
    @if (isset($users))
        @if ($users != null)
            <!-- <ul> -->
            <table>
                <thead>
                    <tr>
                        <td>Nom</td>
                        <td>Adresse mail</td>
                        <td colspan="2">Action</td>
                    </tr>
                </thead>
            
            @foreach ($users as $user)
                <tbody>
                    <tr>
                        <td>
                            <h1 class="">{{ $user->name }}</h1>
                        </td>
                        <td>
                            <p class="">{{ $user->email }}</p>
                        </td>
                        <td>
                            <div class="action">
                                <a href="{{ route('admin.users.edit', $user->id) }}" class="edit">Editer</a>
                                <!-- <a href="{{ route('admin.users.destroy', $user->id) }}" class="delete">Supprimer</a> -->

                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="margin-top: 10px;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <!-- <li>
                    
                </li> -->
                <!-- <li>
                    <h1 class="">Nom: {{ $user->name }}</h1>
                    <p class="">Email: {{ $user->email }}</p>
                    <div>
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="edit">Editer</a>
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="margin-top: 10px;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">Supprimer</button>
                        </form>
                    </div>
                </li> -->
            @endforeach
            </table>
            <!-- </ul> -->
        @else
            <div class="alert alert-warning" role="alert">
                Aucun utilisateur trouvé.
            </div>
        @endif
    @else
        <div class="alert alert-danger" role="alert">
            Une erreur s'est produite lors de la récupération des utilisateurs.
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
            padding: 10px;
            margin: 0 auto;
            max-width: 1140px;
            width: 100%;
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
        a.edit{
            /* inset: 0 auto auto 0; */
            display: block;
            max-width: max-content;
            width: 100%;
            background: #007bff;
            color: #fff;
            padding: 10px;
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        a.edit:hover{
            background: #000fff;
        }
        form button.delete {
            display: block;
            max-width: max-content;
            width: 100%;
            background: #dc3545;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        form button.delete:hover {
            background: #c82333;
        }
    </style>
@endsection