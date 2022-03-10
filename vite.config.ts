import { defineConfig } from "vite";
// import Tailwindcss from "tailwindcss";
import Autoprefixer from "autoprefixer";
import Laravel from "vite-plugin-laravel";
import vue from "@vitejs/plugin-vue";
import Inertia from "./resources/js/vite/inertia-layout";
import AutoImport from 'unplugin-auto-import/vite'
import Components from 'unplugin-vue-components/vite'
import Unocss from 'unocss/vite'

export default defineConfig({
    plugins: [
        Inertia(),

        vue(),

        Unocss(),

        Laravel({
            postcss: [
                // Tailwindcss(),
                Autoprefixer(),
            ],
        }),

        AutoImport({
            imports: [
                "vue",
                {
                    "@inertiajs/inertia-vue3": ["usePage", "useForm"],
                },
            ],
            dts: "resources/js/auto-imports.d.ts",
        }),

        Components({
            dirs: [
                "resources/js/Components",
                "resources/js/Jetstream",
                "resources/js/Layouts",
            ],
            extensions: ["vue"],
            dts: "resources/js/components.d.ts",
        }),
    ],

    optimizeDeps: {
        include: ["vue", "@inertiajs/inertia-vue3"],
    },
});
