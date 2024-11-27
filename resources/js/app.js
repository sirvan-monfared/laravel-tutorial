import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const submitButtons = document.querySelectorAll('.delete-button');

submitButtons.forEach((button) => {
    button.addEventListener('click', (e) => {
        e.preventDefault();

        if(confirm("آیا از انجام این عملیات مطمئن هستید؟")) {
            const form = button.closest('form');
            form.submit();
        }
    })
})

