module.exports = {
    plugins: [
      require("tailwindcss")("./tailwind.config.js"),
      require("postcss-nested"),
      require("postcss-url")({
        url: "inline",
        inline: {
          maxSize: 20,
        },
      }),
      require("autoprefixer"),
    ],
  };