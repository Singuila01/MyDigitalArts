@include('layouts.header')



<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Détails de la carte</h1>
    <div class="bg-white rounded-lg shadow-md p-4">
        <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $card->title }}</h2>
        <p class="text-gray-600 mb-4">{{ $card->description }}</p>
        <!-- Afficher les médias si disponibles -->
        @if ($card->image)
            <img src="{{ $card->image }}" alt="{{ $card->title }}" class="mt-4 w-full object-cover rounded">

        @elseif($card->video)
                    <div class="mt-4">
                <iframe width="100%" height="200" src="{{ str_replace('watch?v=', 'embed/', $card->video) }}" frameborder="0" allowfullscreen></iframe>
            </div>
        @elseif($card->music)
                <div class="mt-4">
                <audio controls>
                    <source src="{{ $card->music }}" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
        @endif
    </div>
</div>