import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'public/assets/sass/portal.scss',
                // 'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/n2words.js',
            ],
            refresh: true,
        }),
    ],
});
