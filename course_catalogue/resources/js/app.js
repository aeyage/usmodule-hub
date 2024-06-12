import './bootstrap';

import Alpine from 'alpinejs';
import 'flowbite';

document.addEventListener('livewire:navigated', () => {
    // Runs immediately after Livewire has finished initializing
    // on the page...
    console.log('navigated')
})

window.Alpine = Alpine;

Alpine.start();



