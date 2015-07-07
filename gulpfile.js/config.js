/* ---------------------------------------
    CONFIG
   --------------------------------------- */

// Project paths
var src     = './src/';
var vendor  = './source/vendor/';
var dist    = './public/';

module.exports = {
  deploy: {
    source: 'public/',
    user: 'USERNAME',
    host: 'DOMAIN.TLD',
    dest: '/path/to/destination/folder/',
    exclude_list: 'rsync-exclude.txt'
  },

  styles: {
    source: src+'styles/main.scss',
    dest: dist+'assets/styles/',
    autoprefixer: {
      browsers: ['> 5%', 'last 2 versions'],
      cascade: false
    }
  },

  javascript: {
    name: 'main',
    source: src+'js/**/*.js',
    dest: dist+'assets/js/'
  },

  images: {
    source: src+'images/**/*',
    dest: dist+'assets/images/'
  },

  wiredep: {
    source: vendor+'**/*.js',
    dest: dist+'assets/js/'
  },

  server: {
    base: dist,
    port: 4000,
    host: '0.0.0.0',
    open: true,
    livereload: true
  },

  clean: {
    all: [
      './.sass-cache',
      dist+'assets/images/*',
      dist+'assets/js/*',
      dist+'assets/styles/*',
    ]
  },

  watch: {
    livereload: dist+'**/*.{css,js,html,php}',
    styles: src + 'styles/**/*.scss',
    javascript: src+'js/**/*.js',
    vendor_javascript: vendor+'**/*.js',
    images: src+'images/**/*.*',
    bower: './bower.json'
  }
};
