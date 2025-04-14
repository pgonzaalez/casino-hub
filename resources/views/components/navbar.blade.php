<nav class="bg-gray-900 border-b border-gray-800 py-4 px-6 sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center">
        <div class="flex items-center">
            <span class="text-2xl font-bold text-white">Jackpot<span class="text-yellow-500">Club</span></span>
        </div>
        <div class="hidden md:flex space-x-8">
            <a href="#juegos" class="text-gray-300 hover:text-yellow-500 transition">Juegos</a>
            <a href="#promociones" class="text-gray-300 hover:text-yellow-500 transition">Promociones</a>
            <a href="#testimonios" class="text-gray-300 hover:text-yellow-500 transition">Testimonios</a>
            <a href="#contacto" class="text-gray-300 hover:text-yellow-500 transition">Contacto</a>
        </div>
        <div class="flex space-x-4">
            <a href="{{ route('login') }}" class="px-4 py-2 rounded border border-yellow-500 text-yellow-500 hover:bg-yellow-500 hover:text-gray-900 transition">Iniciar Sesión</a>
            <a href="{{ route('register') }}" class="px-4 py-2 rounded bg-yellow-500 text-gray-900 hover:bg-yellow-600 transition">Registrarse</a>
        </div>
    </div>
</nav>