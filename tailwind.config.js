const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    theme: {
        extend: {
            colors: {
                primary: colors.orange,
                secondary: colors.slate,
                muted: colors.gray,
                success: colors.green,
                danger: colors.red,
                warning: colors.orange,
                info: colors.gray,
            },
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
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
