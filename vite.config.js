import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/css/app.css',
                
            ],
            server: { 
                host: 'localhost', 
            }, 
            refresh: true,
        }),
        
    ],

});