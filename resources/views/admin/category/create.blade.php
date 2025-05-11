@extends('layouts.headeradmin')

@section('content')

    @if ($errors->any())
        <div class="error_container">
            <strong>Des erreurs sont survenues :</strong>
            <ul style="margin-top: 10px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('admin.category.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nom</label><br>
            <input type="text" name="name" id="name" class="form-control" placeholder="Entrez le nom" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label><br>
            <input type="text" name="description" id="description" class="form-control" placeholder="Entrez la description" required>
            <!-- <textarea name="description" id="description" placeholder="Entrez la description"></textarea> -->
            <!-- <input type="email" name="email" id="email" class="form-control" placeholder="Entrez l'email" required> -->
        </div>
        <div class="form-group">
            <label for="enable">
                <input type="hidden" name="enable" value="0"> {{-- Valeur envoyée si la case n’est pas cochée --}}
                <input type="checkbox" name="enable" value="1" id="enable">
                Activer cette catégorie
            </label>
            <!-- <input type="password" name="password" id="password" class="form-control" placeholder="Entrez le mot de passe" required> -->
        </div>
        
        <!-- <div class="form-group">
            <label for="role">Rôle</label><br>
            <select name="role" id="role" class="form-control" required>
                <option value="admin">Admin</option>
                <option value="user">Utilisateur</option>
            </select>
        </div> -->
        <button type="submit" class="btn btn-primary">Ajouter l'utilisateur</button>
    </form>

    <style>
        .lien-btn{
            display: block;
            background: #1F2937;
            padding: 20px;
            max-width: max-content;
            width: 100%;
            font-weight: 900;
            font-variant-caps: petite-caps;
            color: #fff;
            letter-spacing: 1.2px;
        }
        .error_container{
            background: #fee2e2; 
            padding: 15px; 
            color: #b91c1c; 
            border-radius: 8px; 
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            width: 300px;
            margin: 0 auto;
            border: 1px solid #ccc;
            background: #fff;
            padding: 20px;
            gap: 10px;
        }
        form input, form select, form textarea{
            background: #ccc;
            padding: 5px;
            width: 100%;
        }
        form input::placeholder{
            color: #000;
        }
        form button{
            background: #1F2937;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        form button:hover{
            background: #4B5563;
            font-weight: 800;
        }
    </style>
@endsection