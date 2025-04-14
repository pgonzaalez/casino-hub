<section id="contacto" class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-center mb-16">Contacta con <span class="text-yellow-500">Nosotros</span></h2>
        <div class="grid md:grid-cols-2 gap-12">
            <div>
                <h3 class="text-2xl font-bold mb-6">Estamos para ayudarte</h3>
                <p class="text-gray-300 mb-8">Nuestro equipo de soporte está disponible 24/7 para resolver cualquier duda o problema que puedas tener.</p>
                
                <div class="space-y-6">
                    @foreach($contactMethods as $method)
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center text-gray-900">
                            {!! $method['icon'] !!}
                        </div>
                        <div class="ml-4">
                            <h4 class="font-bold">{{ $method['title'] }}</h4>
                            <p class="text-gray-300">{{ $method['value'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <div class="bg-gray-800 p-8 rounded-xl shadow-lg">
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="name" class="block text-gray-300 mb-2">Nombre</label>
                        <input type="text" id="name" name="name" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    </div>
                    
                    <div class="mb-6">
                        <label for="email" class="block text-gray-300 mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    </div>
                    
                    <div class="mb-6">
                        <label for="message" class="block text-gray-300 mb-2">Mensaje</label>
                        <textarea id="message" name="message" rows="4" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-yellow-500"></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-yellow-500 text-gray-900 font-bold py-3 px-6 rounded-lg hover:bg-yellow-600 transition">Enviar Mensaje</button>
                </form>
            </div>
        </div>
    </div>
</section>