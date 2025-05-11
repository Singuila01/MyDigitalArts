<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyDigitalArt</title>
    <!-- CDN Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <!-- Navbar -->
    <nav class="bg-gray-800 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/home" class="text-2xl font-bold">Vignettes</a>
            <div class="space-x-4">
                <a href="/admin/users" class="hover:text-gray-300 transition-colors duration-200">Utilisateurs</a>
                <a href="/admin/category" class="hover:text-gray-300 transition-colors duration-200">Catégories</a>
                <!-- Exemple de lien conditionnel pour connexion/déconnexion -->
                @if (auth()->check())
                    <a href="/logout" class="hover:text-gray-300 transition-colors duration-200">Déconnexion</a>
                @else
                    <a href="/login" class="hover:text-gray-300 transition-colors duration-200">Connexion</a>
                @endif
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>