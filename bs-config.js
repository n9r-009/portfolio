module.exports = {
  server: false,
  proxy: 'localhost:8000',
  files: [
    "./dist/wp-content/themes/**/*.*",
    "./src/**/*.*"
  ]
};
