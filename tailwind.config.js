import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            // Mantén la fuente Figtree como predeterminada
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                // Agrega las fuentes de Stitch
                'title-md': ['Inter', 'sans-serif'],
                'label-sm': ['Inter', 'sans-serif'],
                'headline-lg': ['Inter', 'sans-serif'],
                'body-md': ['Inter', 'sans-serif'],
                'headline-lg-mobile': ['Inter', 'sans-serif'],
                'display-lg': ['Inter', 'sans-serif'],
                'numeric-data': ['Inter', 'sans-serif'],
            },
            
            // Agrega todos los colores de Stitch
            colors: {
                'surface-variant': '#d9e3f6',
                'primary': '#00288e',
                'on-tertiary-fixed-variant': '#930013',
                'error-container': '#ffdad6',
                'on-tertiary': '#ffffff',
                'on-primary-container': '#a8b8ff',
                'tertiary': '#70000c',
                'surface': '#f8f9ff',
                'surface-container-high': '#dee9fc',
                'tertiary-fixed': '#ffdad7',
                'tertiary-container': '#9b0015',
                'on-primary-fixed-variant': '#173bab',
                'secondary': '#006c49',
                'primary-container': '#1e40af',
                'on-primary': '#ffffff',
                'surface-container-low': '#eff4ff',
                'secondary-container': '#6cf8bb',
                'surface-tint': '#3755c3',
                'error': '#ba1a1a',
                'on-tertiary-fixed': '#410004',
                'inverse-primary': '#b8c4ff',
                'secondary-fixed': '#6ffbbe',
                'inverse-surface': '#27313f',
                'secondary-fixed-dim': '#4edea3',
                'on-secondary-fixed-variant': '#005236',
                'on-surface': '#121c2a',
                'on-error': '#ffffff',
                'tertiary-fixed-dim': '#ffb3ad',
                'primary-fixed-dim': '#b8c4ff',
                'outline-variant': '#c4c5d5',
                'primary-fixed': '#dde1ff',
                'outline': '#757684',
                'on-secondary-fixed': '#002113',
                'on-primary-fixed': '#001453',
                'background': '#f8f9ff',
                'surface-container': '#e6eeff',
                'on-secondary-container': '#00714d',
                'on-background': '#121c2a',
                'on-surface-variant': '#444653',
                'on-secondary': '#ffffff',
                'surface-container-lowest': '#ffffff',
                'on-tertiary-container': '#ffa39c',
                'inverse-on-surface': '#eaf1ff',
                'surface-container-highest': '#d9e3f6',
                'on-error-container': '#93000a',
                'surface-bright': '#f8f9ff',
                'surface-dim': '#d0dbed',
            },
            
            // Agrega los bordes redondeados de Stitch
            borderRadius: {
                'DEFAULT': '0.25rem',
                'lg': '0.5rem',
                'xl': '0.75rem',
                'full': '9999px',
            },
            
            // Agrega los tamaños de texto de Stitch
            fontSize: {
                'title-md': ['18px', { lineHeight: '1.5', fontWeight: '600' }],
                'label-sm': ['14px', { lineHeight: '1.4', letterSpacing: '0.01em', fontWeight: '500' }],
                'headline-lg': ['32px', { lineHeight: '1.2', letterSpacing: '-0.01em', fontWeight: '600' }],
                'body-md': ['16px', { lineHeight: '1.6', fontWeight: '400' }],
                'headline-lg-mobile': ['24px', { lineHeight: '1.2', fontWeight: '600' }],
                'display-lg': ['48px', { lineHeight: '1.1', letterSpacing: '-0.02em', fontWeight: '700' }],
                'numeric-data': ['16px', { lineHeight: '1.0', letterSpacing: '-0.01em', fontWeight: '600' }],
            },
            
            // Agrega los espaciados de Stitch
            spacing: {
                'container-max': '1280px',
                'margin-desktop': '40px',
                'unit': '8px',
                'margin-mobile': '20px',
                'gutter': '24px',
            },
        },
    },

    plugins: [forms],
};