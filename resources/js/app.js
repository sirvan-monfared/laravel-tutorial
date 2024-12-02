import './bootstrap';

import Alpine from 'alpinejs';

import * as FilePond from 'filepond';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';

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

const filepond = document.querySelector('.filepond');
const csrf = document.querySelector('input[name="_token"]').value;

FilePond.registerPlugin(FilePondPluginImagePreview);
const pond = FilePond.create(filepond, {
    allowMultiple: true,
    name: 'filepond',
    server: {
        process: "/upload",
        headers: {
            'X-CSRF-TOKEN': csrf,
            'accept': 'application/json'
        }
    },
    onerror: (error) => {
        alert("لطفا یک تصویر از نوع jpg یا png ارسال کنید");
    }
});
