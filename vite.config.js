import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { join } from 'path';
export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: [
          {
            find: /~(.+)/,
            replacement: join(process.cwd(), 'node_modules/$1'),
          },
        ],
    },
});
