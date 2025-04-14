export function initializeNewsletter() {
    const newsletterContainer = document.getElementById('react-newsletter');
    if (!newsletterContainer) return;

    // Crear estructura HTML del newsletter
    newsletterContainer.innerHTML = `
        <form id="newsletter-form" class="space-y-4">
            <div>
                <label for="newsletter-email" class="block text-sm font-medium text-gray-300 mb-1">Email</label>
                <input type="email" id="newsletter-email" placeholder="Tu email" class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>
            
            <div class="flex items-center">
                <input id="terms" type="checkbox" class="h-4 w-4 text-yellow-500 focus:ring-yellow-500 border-gray-600 rounded">
                <label for="terms" class="ml-2 block text-sm text-gray-300">
                    Acepto recibir comunicaciones promocionales
                </label>
            </div>
            
            <button type="submit" class="w-full bg-yellow-500 text-gray-900 font-bold py-3 px-6 rounded-lg hover:bg-yellow-600 transition">
                Suscribirme
            </button>
        </form>
    `;

    // Manejar el envío del formulario
    const form = document.getElementById('newsletter-form');
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const email = document.getElementById('newsletter-email').value;
        const terms = document.getElementById('terms').checked;
        
        if (!email) {
            alert('Por favor, introduce tu email');
            return;
        }
        
        if (!terms) {
            alert('Debes aceptar recibir comunicaciones');
            return;
        }
        
        // Aquí enviarías los datos a tu backend
        // Por ejemplo, usando fetch:
        /*
        fetch('/api/newsletter', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ email, terms }),
        })
        .then(response => response.json())
        .then(data => {
            // Mostrar mensaje de éxito
            showSuccessMessage();
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Ha ocurrido un error. Por favor, inténtalo de nuevo.');
        });
        */
        
        // Para este ejemplo, simplemente mostramos el mensaje de éxito
        showSuccessMessage();
    });

    function showSuccessMessage() {
        newsletterContainer.innerHTML = `
            <div class="text-center py-4">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-green-500 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2">¡Gracias por suscribirte!</h3>
                <p class="text-gray-300">Te mantendremos informado sobre nuestras últimas promociones.</p>
            </div>
        `;
    }
}