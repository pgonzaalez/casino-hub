<section id="juegos" class="py-20 bg-gray-800">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-center mb-16">Juegos <span class="text-yellow-500">Destacados</span></h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($games as $game)
            <div class="bg-gray-900 rounded-xl overflow-hidden shadow-lg transition transform hover:scale-105">
                <div class="h-48 bg-gray-700 relative">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <img src="{{ $game['image'] }}" alt="{{ $game['title'] }}" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-2">{{ $game['title'] }}</h3>
                    <p class="text-gray-400 mb-4">{{ $game['description'] }}</p>
                    <a href="{{ $game['url'] }}" class="inline-block px-6 py-3 bg-yellow-500 text-gray-900 rounded-lg font-bold hover:bg-yellow-600 transition">Jugar Ahora</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>