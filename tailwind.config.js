const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    theme: {
        extend: {
            colors: {
                primary: colors.cyan,
                secondary: colors.yellow, //slate
                muted: colors.gray,
                success: colors.green,
                danger: colors.red,
                warning: colors.orange,
                info: colors.gray,
            },
            fontFamily: {
                mono: ['"M PLUS 1 Code"', ...defaultTheme.fontFamily.mono],
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
                script: ['"Architects Daughter"'],
                serif: ['"Zen Maru Gothic"', ...defaultTheme.fontFamily.serif],
            },
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    content: [
        './app/**/*.php',
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.jsx',
        './resources/**/*.ts',
        './resources/**/*.tsx',
        './resources/**/*.php',
        './resources/**/*.vue',
        './resources/**/*.twig',
    ],
    safelist: [
        {
          pattern: /max-w-(xs|sm|md|lg|xl|2xl|3xl|4xl|5xl|6xl|7xl|full)/,
          variants: ['sm'],
        },
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
