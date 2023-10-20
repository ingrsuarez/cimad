import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                wiggle: {
                  '0%': { transform: 'translateX(-20%)' },
                  '100%': { transform: 'translateX(0)' },
                },
                fadein: {
                    '0%': {
                        opacity: '0',
                        transform: 'translateY(-10px)'
                    },
                    '100%': {
                        opacity: '1',
                        transform: 'translateY(0)'
                    },
                }
            },
            
        },
    },

    plugins: [forms, typography],
};

// module.exports = {
//     theme: {
//       extend: {
//         keyframes: {
//           wiggle: {
//             '0%, 100%': { transform: 'rotate(-3deg)' },
//             '50%': { transform: 'rotate(3deg)' },
//           }
//         }
//       }
//     }
//   };
