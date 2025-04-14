<section id="promociones" class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-center mb-16">Promociones <span class="text-yellow-500">Exclusivas</span></h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($promotions as $promo)
            <div class="bg-gradient-to-br {{ $promo['gradient'] }} rounded-xl p-8 shadow-xl">
                <div class="text-yellow-500 text-5xl font-bold mb-4">{{ $promo['highlight'] }}</div>
                <h3 class="text-2xl font-bold mb-2">{{ $promo['title'] }}</h3>
                <p class="text-gray-300 mb-6">{{ $promo['description'] }}</p>
                <a href="{{ $promo['url'] }}" class="inline-block px-6 py-3 bg-yellow-500 text-gray-900 rounded-lg font-bold hover:bg-yellow-600 transition">{{ $promo['button_text'] }}</a>
            </div>
            @endforeach
        </div>
    </div>
</section>