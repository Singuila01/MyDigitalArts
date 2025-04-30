@extends("layouts.headeradmin")

@section("content")
    <a href="/admin/category" class="lien-btn">Retour en arrière</a>
    <form action="{{ route('admin.category.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}" required>
        @error('name')
        <div style="color: red;">{{ $message }}</div>
        @enderror
        
        <label for="description">Description :</label>
        <input type="text" name="description" id="description" value="{{ old('description', $category->description) }}" required>
        <!-- <textarea name="description" id="description" value="{{ old('description', $category->description) }}" required></textarea> -->
        @error('description')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label for="enable">Actif :</label>
        <select name="enable" id="enable" value="{{ old('enable', $category->enable) }}" required>
            <option value="1" {{ $category->enable ? 'selected' : '' }}>Oui</option>
            <option value="0" {{ !$category->enable ? 'selected' : '' }}>Non</option>
        </select>
        @error('enable')
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