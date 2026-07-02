import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { bunny } from 'laravel-vite-plugin/fonts';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            fonts: [
                bunny('Instrument Sans', {
                    weights: [400, 500, 600],
                }),
            ],
        }),
        tailwindcss(),
    ],
    server: {
        host: '0.0.0.0',
        port: 5173,
        strictPort: true,
        // 1. Permite que el navegador acepte los archivos externos
        cors: true,
        // 2. Obliga a Laravel a escribir la ruta exacta y segura en tu HTML
        origin: 'https://miportafolio.ddev.site:5173',
        hmr: {
            host: 'miportafolio.ddev.site',
            protocol: 'wss',
        },
    },
});
