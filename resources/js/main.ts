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
      createApp({ render: () => h(app, props) })
          .use(plugin)
          .mixin({ methods: { route }})
          .mount(el);
    },
});