import { defineConfig, presetUno, presetIcons, transformerDirectives } from "unocss";

export default defineConfig({
    presets: [
        presetUno(),
        presetIcons({
            scale: 1.2,
            warn: true,
        }),
    ],
    theme: {
        colors: {
            primary: "#34C45E",
        },
    },
    transformers: [transformerDirectives()],
});