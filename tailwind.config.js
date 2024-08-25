/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./assets/**/*.js",
        "./templates/**/*.html.twig",
    ],
    theme: {
        extend: {
            transitionProperty: {
                'spacing': 'margin, padding, display',
                'width': 'width',
            },
            colors: {
                "transparent": "transparent",
                "base": {
                    "light": "#F8F9FA",
                    "dark": "#1E1F2F",
                },
                "surface": {
                    "light": "#FFFFFF",
                    "dark": "#2A2B3D",
                },
                "content": {
                    "primary": {
                        "light": "#030c4d",
                        "dark": "#E6E8FF",
                    },
                    "secondary": "#f487b6",
                },
                "accent": {
                    "light": "#f487b6",
                    "dark": "#FF9EC9",
                },
            }

            // colors: {
            //   "transparent": "transparent",
            //   "white": "#F8F9FA",
            //   "black": "#2a2d43",
            //   "light-text-base": "#030c4d",
            //   "light-text-secondary": "#f487b6",
            //   "dark-text-base": "#030c4d",
            //   "dark-text-secondary": "#f487b6",
            //   "light-primary": "#f487b6",
            //   "dark-primary": "#f487b6",
            //   // "light-neutral": "#f8eff9",
            //   "light-neutral": "#faf8fe",
            //   "dark-neutral": "#fff3f0",
            // },
        },
    },
    plugins:
        [],
}
