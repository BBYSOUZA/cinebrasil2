import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
  ],
  build: {
    rollupOptions: {
      external: [
        // Exclude Laravel’s exception renderer CSS files
        /vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/resources\/exceptions\/renderer/
      ]
    }
  }
});
