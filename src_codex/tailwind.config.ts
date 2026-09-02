import type { Config } from 'tailwindcss'

export default {
  content: ['./index.html', './src/**/*.{js,ts,jsx,tsx}'],
  theme: {
    extend: {
      colors: {
        navy: {
          DEFAULT: '#071B2D',
          950: '#041421',
          900: '#071B2D',
          800: '#0A263E',
        },
        ink: '#0A1C2C',
        lime: {
          DEFAULT: '#C7E600',
          500: '#C7E600',
          600: '#AEC900',
        },
        soft: '#F6F7F5',
      },
      boxShadow: {
        card: '0 18px 50px -32px rgba(7, 27, 45, 0.28)',
      },
      fontFamily: {
        sans: ['Inter', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'sans-serif'],
      },
    },
  },
  plugins: [],
} satisfies Config
