import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/admin.css',
                "resources/css/bootstrap.min.css",
                "resources/css/fontawesome.min.css",
                "resources/css/override.css",
                "resources/css/responsive.css",
                "resources/css/style.css",

                'resources/js/app.js',
                'resources/js/bootstrap.js',
                'resources/js/script.js',
                'resources/js/tinymce.min.js',
            ],

            refresh: true,
        }),
    ],
});
