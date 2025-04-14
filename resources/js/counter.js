export function initializeCountdown() {
    const counterContainer = document.getElementById('react-counter');
    if (!counterContainer) return;

    // Crear estructura HTML del contador
    counterContainer.innerHTML = `
        <div class="text-center">
            <h3 class="text-2xl font-bold mb-4">¡Oferta por tiempo limitado!</h3>
            <p class="mb-6">Regístrate ahora y obtén un bono de bienvenida del 200%</p>
            
            <div class="flex justify-center gap-4 mb-6">
                <div class="bg-gray-900 text-yellow-500 text-3xl font-bold rounded-lg w-16 h-16 flex items-center justify-center" id="hours-display">
                    23
                </div>
                <div class="bg-gray-900 text-yellow-500 text-3xl font-bold rounded-lg w-16 h-16 flex items-center justify-center" id="minutes-display">
                    59
                </div>
                <div class="bg-gray-900 text-yellow-500 text-3xl font-bold rounded-lg w-16 h-16 flex items-center justify-center" id="seconds-display">
                    59
                </div>
            </div>
            
            <div class="flex justify-center gap-4 text-xs text-gray-400">
                <span class="w-16 text-center">HORAS</span>
                <span class="w-16 text-center">MINUTOS</span>
                <span class="w-16 text-center">SEGUNDOS</span>
            </div>
            
            <a href="/register" class="mt-8 inline-block px-8 py-3 bg-yellow-500 text-gray-900 font-bold rounded-lg hover:bg-yellow-600 transition">
                ¡Obtén tu bono ahora!
            </a>
        </div>
    `;

    // Obtener elementos del DOM
    const hoursDisplay = document.getElementById('hours-display');
    const minutesDisplay = document.getElementById('minutes-display');
    const secondsDisplay = document.getElementById('seconds-display');

    // Establecer la fecha objetivo (24 horas desde ahora)
    const targetTime = new Date();
    targetTime.setHours(targetTime.getHours() + 23);
    targetTime.setMinutes(targetTime.getMinutes() + 59);
    targetTime.setSeconds(targetTime.getSeconds() + 59);

    // Función para actualizar el contador
    function updateCountdown() {
        const currentTime = new Date();
        const difference = targetTime - currentTime;
        
        // Si el contador ha terminado
        if (difference <= 0) {
            hoursDisplay.textContent = '00';
            minutesDisplay.textContent = '00';
            secondsDisplay.textContent = '00';
            clearInterval(interval);
            return;
        }
        
        // Calcular horas, minutos y segundos
        const hours = Math.floor(difference / (1000 * 60 * 60));
        const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((difference % (1000 * 60)) / 1000);
        
        // Actualizar la visualización
        hoursDisplay.textContent = hours < 10 ? `0${hours}` : hours;
        minutesDisplay.textContent = minutes < 10 ? `0${minutes}` : minutes;
        secondsDisplay.textContent = seconds < 10 ? `0${seconds}` : seconds;
    }
    
    // Actualizar inmediatamente y luego cada segundo
    updateCountdown();
    const interval = setInterval(updateCountdown, 1000);
}