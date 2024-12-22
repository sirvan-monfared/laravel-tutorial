import Alpine from "alpinejs";
import persist from "@alpinejs/persist";

import * as FilePond from 'filepond';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
FilePond.registerPlugin(FilePondPluginImagePreview);

window.FilePond = FilePond;

Alpine.plugin(persist);
window.Alpine = Alpine;
Alpine.start();
