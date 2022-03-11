import { defineConfig, presetUno, presetIcons, presetWebFonts, transformerDirectives, presetAttributify} from "unocss";

export default defineConfig({
    presets: [
        presetUno(),
        presetIcons({
            scale: 1.2,
            warn: true,
        }),
        // presetWebFonts({
        //   fonts: {
        //     robot: 'Roboto'
        //   }
        // }),
        presetAttributify({
            prefix: "gl-",
            ignoreAttributes: ['stroke', 'fill']
        }),
    ],
    theme: {
        colors: {
            primary: "#34C45E",
        },
    },
    transformers: [transformerDirectives()],
});