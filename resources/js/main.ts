import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { importPageComponent } from "@/vite/import-page-component";
// @ts-ignore
import route from 'ziggy'

import './bootstrap'
import "@unocss/reset/tailwind.css"
import 'uno.css';

createInertiaApp({
  resolve: (name) =>
    importPageComponent(name, import.meta.glob("./Pages/**/*.vue")),
    setup({ el, app, props, plugin }) {
      const vueApp = createApp({ render: () => h(app, props) })
      vueApp.config.globalProperties.$route = route
      vueApp.use(plugin)
      .mount(el);
    },
});