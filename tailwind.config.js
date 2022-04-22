module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    './resources/**/*.{html,js}', './node_modules/tw-elements/dist/js/**/*.js',
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    colors: {
      'maroon': '#800000'
    },
    extend: {},
  },
  plugins: [
    require('tw-elements/dist/plugin'),
    require('flowbite/plugin')
  ],
}
