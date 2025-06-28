import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    // server: {
    //     host: '0.0.0.0',
    //     port: 5173,
    //     proxy: {
    //     '/api': {
    //         target: 'http://localhost',
    //         changeOrigin: true,
    //         secure: false,
    //     },
    //     },
    // },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});



