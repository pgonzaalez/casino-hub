import './bootstrap';

import { initializeCountdown } from './counter';
import { initializeNewsletter } from './newsletter';

document.addEventListener('DOMContentLoaded', function() {
    // Inicializar componentes
    initializeCountdown();
    initializeNewsletter();
});