const {
  fontFamily,
  zIndex,
  boxShadow,
  transformOrigin,
} = require("tailwindcss/defaultTheme");

module.exports = {
  purge: {
    layers: ["utilities"],
    content: [
      "resources/**/*.js",
      "resources/**/*.php",
      "resources/**/*.blade.php",
      "resources/**/*.ts",
      "woocommerce/**/*.php",
      "app/**/*.php",
      "pages/**/*.php",
      "./header.php",
    ],
    options: {},
  },
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: "1.25rem",
      },
    },
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
    },
    colors: {
      transparent: "transparent",
      current: "currentColor",

      black: "#000",
      white: "#FFFFFF",
      navbar:{
        100:'#243c5a',
      }, 
      gray: {
        darkest:'#101010',
        100: "#f7fafc",
        200: "#edf2f7",
        300: "#e2e8f0",
        400: "#cbd5e0",
        500: "#101010",
        600: "#718096",
        700: "#4a5568",
        800: "#332F30F7",
        900: "#C4C4C4",
      },
      red: {
        100: "#fff5f5",
        200: "#fed7d7",
        300: "#feb2b2",
        400: "#fc8181",
        500: "#f56565",
        600: "#E84246",
        700: "#c53030",
        800: "#9b2c2c",
        900: "#742a2a",
      },
      orange: {
        100: "#fffaf0",
        200: "#feebc8",
        300: "#fbd38d",
        400: "#f6ad55",
        500: "#ed8936",
        600: "#dd6b20",
        700: "#c05621",
        800: "#9c4221",
        900: "#7b341e",
      },
      yellow: {
        100: "#fffff0",
        200: "#fefcbf",
        300: "#faf089",
        400: "#f6e05e",
        500: "#ecc94b",
        600: "#d69e2e",
        700: "#b7791f",
        800: "#975a16",
        900: "#744210",
      },
      green: {
        100: "#f0fff4",
        200: "#c6f6d5",
        300: "#9ae6b4",
        400: "#68d391",
        500: "#48bb78",
        600: "#38a169",
        700: "#2f855a",
        800: "#276749",
        900: "#22543d",
      },
      teal: {
        100: "#e6fffa",
        200: "#b2f5ea",
        300: "#81e6d9",
        400: "#4fd1c5",
        500: "#38b2ac",
        600: "#319795",
        700: "#2c7a7b",
        800: "#285e61",
        900: "#234e52",
      },
      blue: {
        100: "#ebf8ff",
        200: "#bee3f8",
        300: "#90cdf4",
        400: "#63b3ed",
        500: "#4299e1",
        600: "#3182ce",
        700: "#2b6cb0",
        800: "#2c5282",
        900: "#2a4365",
      },
      indigo: {
        100: "#ebf4ff",
        200: "#c3dafe",
        300: "#a3bffa",
        400: "#7f9cf5",
        500: "#667eea",
        600: "#5a67d8",
        700: "#4c51bf",
        800: "#434190",
        900: "#3c366b",
      },
      purple: {
        100: "#faf5ff",
        200: "#e9d8fd",
        300: "#d6bcfa",
        400: "#b794f4",
        500: "#9f7aea",
        600: "#805ad5",
        700: "#6b46c1",
        800: "#553c9a",
        900: "#44337a",
      },
      pink: {
        100: "#fff5f7",
        200: "#fed7e2",
        300: "#fbb6ce",
        400: "#F8BDB1",
        500: "#ed64a6",
        600: "#d53f8c",
        700: "#b83280",
        800: "#97266d",
        900: "#702459",
      },
    },

    fontSize: {
      xxxs: `${7 / 16}rem`,
      xxs: `${10 / 16}rem`,
      xs: ["0.75rem", { lineHeight: "1rem" }],
      sm: ["0.875rem", { lineHeight: "1.25rem" }],
      base: ["1rem", { lineHeight: "1.5rem" }],
      lg: ["1.125rem", { lineHeight: "1.75rem" }],
      xl: ["1.25rem", { lineHeight: "1.75rem" }],
      "2xl": ["1.5rem", { lineHeight: "2rem" }],
      "3xl": ["1.875rem", { lineHeight: "2.25rem" }],
      "4xl": ["2.25rem", { lineHeight: "2.5rem" }],
      "5xl": ["3rem", { lineHeight: "1" }],
      "6xl": ["3.75rem", { lineHeight: "1" }],
      "7xl": ["4.5rem", { lineHeight: "1" }],
      "8xl": ["6rem", { lineHeight: "1" }],
      "9xl": ["8rem", { lineHeight: "1" }],
    },
    extend: {
      screens: {
        xs: { max: "375px" },
        "2xl": "1300px",
        print: { raw: "print" },
      },
      colors: {
        gray: {
          50: "#f9fafb",
          100: "#f4f5f7",
          200: "#e5e7eb",
          300: "#d2d6dc",
          400: "#9fa6b2",
          500: "#6b7280",
          600: "#4b5563",
          700: "#374151",
          800: "#252f3f",
          900: "#24241C",
        },
      },
      maxHeight: {
       
      },
      maxWidth: {
       
      },
      boxShadow: {

      },
      minHeight: {
        8: "2rem",
        10: "2.5rem",
      },
      width: {
        "1/8": "12.5%",
        "3/11": "23%",
        "5/11": "45%",
        "6/11": "55%",
        "7/11": "48%",
      },
      height: {
        "11/12": "91.666667%",
      },
      maxHeight: {
        "11/12": "91.666667%",
      },
    }
  },
  variants: {
   
  },

  plugins: [
    require("@tailwindcss/aspect-ratio"),
    require("@tailwindcss/line-clamp"),
    require("@tailwindcss/typography")
  ],
};