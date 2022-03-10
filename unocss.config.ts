import { defineConfig, presetUno, presetIcons, presetWebFonts, transformerDirectives} from "unocss";

export default defineConfig({
    presets: [
        presetUno(),
        presetIcons({
            scale: 1.2,
            warn: true,
        }),
        presetWebFonts({
          fonts: {
            robot: 'Roboto'
          }
        }),
    ],
    theme: {
      colors: {
        primary: '#34C45E'
      }
    },
    transformers: [
      transformerDirectives()
    ]
});