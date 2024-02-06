import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                `resources/js/plugins/codebase/grid.css`,
                'resources/js/bootstrap.js',
                // 'resources/js/app.js',
                'resources/js/plugins/jquery.js',
                'resources/js/plugins/boostrap.bundle.js'
            ],
            refresh: true,
        }),
    ],
});
