<section class="py-20 bg-gray-800">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-center mb-16">Métodos de <span class="text-yellow-500">Pago</span></h2>
        <div class="flex flex-wrap justify-center gap-8">
            @foreach($paymentMethods as $method)
            <div class="bg-gray-700 p-6 rounded-xl flex items-center justify-center w-32 h-20">
                <span class="text-xl font-bold">{{ $method }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>