
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
    build: {
        manifest: true,
        outDir: 'public/build', // Explicit output directory
        emptyOutDir: true,      // Clean directory before build
        rollupOptions: {
            // Only use external if you're using CDN assets
            external: [
                // Add any external dependencies here
                /^bootstrap/,
                /^jquery/
            ]
        }
    }
});
