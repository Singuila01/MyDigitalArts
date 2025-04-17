@include('layouts.header')
<!-- Contenu principal -->
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Liste des cartes</h1>
    @if ($cards->isEmpty())
        <p class="text-gray-600 text-center">Aucune carte disponible pour le moment.</p>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($cards as $card)
                <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow duration-300">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $card->title }}</h2>
                    <p class="text-gray-600">{{ $card->description }}</p>
                    <!-- Afficher les médias si disponibles -->
                    @if ($card->image)
                        <div>
                        <img src="{{ $card->image }}" alt="{{ $card->title }}" class="mt-4 w-full h-48 object-cover rounded">
                        <p class="mt-2 text-sm text-blue-600">Image : <a href="{{ $card->image }}" target="_blank">Voir</a></p>
                        </div>
                        @if($card->music) <div class="mt-4">
                                <audio controls class="w-full">
                                    <source src="{{ $card->music }}" type="audio/mpeg">
                                    Votre navigateur ne prend pas en charge l'élément audio.
                                </audio>
                            </div>
                        @endif
                    @elseif($card->video)
                        <div class="mt-4">
                                <iframe width="100%" height="200" src="{{ str_replace(['watch?v=', 'vimeo.com'], ['embed/', 'player.vimeo.com/video'], $card->video) }}" frameborder="0" allowfullscreen>
                            </iframe>
                        </div>                    
                    @endif

                </div>
            @endforeach
        </div>
    @endif
</div>
</body>
</html>