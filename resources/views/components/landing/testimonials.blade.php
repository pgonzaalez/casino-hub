<section id="testimonios" class="py-20 bg-gray-800">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-center mb-16">Lo que dicen <span class="text-yellow-500">nuestros jugadores</span></h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($testimonials as $testimonial)
            <div class="bg-gray-900 p-8 rounded-xl shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center text-gray-900 font-bold text-xl">{{ substr($testimonial['name'], 0, 1) }}</div>
                    <div class="ml-4">
                        <h4 class="font-bold">{{ $testimonial['name'] }}</h4>
                        <div class="flex text-yellow-500">
                            @for($i = 0; $i < 5; $i++)
                                <span>★</span>
                            @endfor
                        </div>
                    </div>
                </div>
                <p class="text-gray-300">"{{ $testimonial['quote'] }}"</p>
            </div>
            @endforeach
        </div>
    </div>
</section>