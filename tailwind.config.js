/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class", // Enables dark mode using the 'class' method
    content: [
      "./resources/views/**/*.blade.php",
      "./resources/js/**/*.js",
      "./node_modules/flowbite/**/*.js", // Include Flowbite
    ],
    theme: {
      extend: {},
    },
    plugins: [
      require('flowbite/plugin'), // Enable Flowbite plugin
    ],
  };