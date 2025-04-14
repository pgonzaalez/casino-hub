<footer class="bg-gray-900 border-t border-gray-800 py-12">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
            <div>
                <h3 class="text-xl font-bold mb-4">JackpotClub</h3>
                <p class="text-gray-400">El mejor casino online con los juegos más emocionantes y los mejores premios.</p>
            </div>
            
            <div>
                <h3 class="text-xl font-bold mb-4">Enlaces</h3>
                <ul class="space-y-2">
                    @foreach($links as $link)
                    <li><a href="{{ $link['url'] }}" class="text-gray-400 hover:text-yellow-500 transition">{{ $link['title'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            
            <div>
                <h3 class="text-xl font-bold mb-4">Legal</h3>
                <ul class="space-y-2">
                    @foreach($legalLinks as $link)
                    <li><a href="{{ $link['url'] }}" class="text-gray-400 hover:text-yellow-500 transition">{{ $link['title'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            
            <div>
                <h3 class="text-xl font-bold mb-4">Síguenos</h3>
                <div class="flex space-x-4">
                    @foreach($socialLinks as $social)
                    <a href="{{ $social['url'] }}" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center text-gray-300 hover:bg-yellow-500 hover:text-gray-900 transition">
                        {!! $social['icon'] !!}
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
        
        <div class="mt-12 pt-8 border-t border-gray-800 text-center">
            <p class="text-gray-400">&copy; {{ date('Y') }} JackpotClub. Todos los derechos reservados.</p>
            <div class="flex flex-wrap justify-center gap-4 mt-4">
                @foreach($certifications as $cert)
                <img src="{{ $cert['image'] }}" alt="{{ $cert['alt'] }}" class="h-8">
                @endforeach
            </div>
            <p class="text-gray-500 mt-4 text-sm max-w-2xl mx-auto">
            JackpotClubf promueve el juego responsable. Jugar en casinos puede ser adictivo. Por favor, juega de manera responsable. Solo para mayores de 18 años.
            </p>
        </div>
    </div>
</footer>