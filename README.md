# Kirby based website for New Tradition
The website for New Tradition with a grid based design built on Kirby CMS and utilising gulp.

#### Features
- Takes Bower packages into account
- Lints and uglifies Javascript
- Compiles and autoprefixes SCSS

## Usage
```bash
  # Build all assets, connect to a PHP server and start watching the files.
  $ gulp
  
  # Deploy all files in `public/` to a specified directory (probably SSH). Uses rsync.
  $ gulp deploy
```

