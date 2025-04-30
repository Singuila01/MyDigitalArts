@extends('layouts.header')

@section('content')

    @if ($errors->any())
        <div style="background: #fee2e2; padding: 15px; color: #b91c1c; border-radius: 8px; margin-bottom: 20px;">
            <strong>Des erreurs sont survenues :</strong>
            <ul style="margin-top: 10px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nom</label><br>
            <input type="text" name="name" id="name" class="form-control" placeholder="Entrez le nom" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" class="form-control" placeholder="Entrez l'email" required>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label><br>
            <input type="password" name="password" id="password" class="form-control" placeholder="Entrez le mot de passe" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirmer le mot de passe</label><br>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirmez le mot de passe" required>
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
        form input, form select{
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