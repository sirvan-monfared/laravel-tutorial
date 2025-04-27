import './bootstrap';

import Alpine from 'alpinejs';

import * as FilePond from 'filepond';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
FilePond.registerPlugin(FilePondPluginImagePreview);

window.FilePond = FilePond;

// window.Alpine = Alpine;
//
// Alpine.start();

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
