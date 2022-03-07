import { defineConfig } from "vite";
import tailwindcss from "tailwindcss";
import autoprefixer from "autoprefixer";
import laravel from "vite-plugin-laravel";
import vue from "@vitejs/plugin-vue";
import inertia from "./resources/js/vite/inertia-layout";
import AutoImport from 'unplugin-auto-import/vite'
import Components from 'unplugin-vue-components/vite'

export default defineConfig({
  plugins: [
    inertia(),

    vue(),

    laravel({
      postcss: [tailwindcss(), autoprefixer()],
    }),

    AutoImport({
      imports: [
          'vue'
      ],
      dts: 'resources/js/auto-imports.d.ts'
    }),

    Components({
      dirs: ['resources/js/Components', 'resources/js/Jetstream', 'resources/js/Layouts'],
      extensions: ['vue'],
      dts: 'resources/js/components.d.ts'
    })
  ],
});
