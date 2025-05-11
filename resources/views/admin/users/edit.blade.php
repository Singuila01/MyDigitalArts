@extends("layouts.headeradmin")

@section("content")
    <a href="/admin/users" class="lien-btn">Retour en arrière</a>
    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required>
        @error('name')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label for="email">Adresse mail :</label>
        <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required>
        @error('email')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <button type="submit">Mettre à jour</button>
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
        form input{
            background: #ccc;
            padding: 5px;
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