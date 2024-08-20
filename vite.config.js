import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import path from 'path';

export default defineConfig({
  resolve: {
    alias:{
      '@assets':path.resolve(__dirname,'public/assets'),
      '@bootstrap':path.resolve(__dirname,'node_modules/bootstrap'),
    }
  },
  plugins: [
        vue(),
        laravel({
            input: [
              'resources/css/app.css',
              'resources/css/style.css',
              'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
