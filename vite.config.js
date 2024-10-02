import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/jawa.css', 'resources/js/skript.js'],
            refresh: true,
        }),
    ],
});
