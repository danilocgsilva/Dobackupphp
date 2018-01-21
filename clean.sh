#!/bin/bash

# Halts the scripts in case of error
set -e

# Loads components. Must hav in the system the composer, npm and gulp.
composer install
composer update
npm install
gulp

# Removes the development assets
rm -rv assets
rm composer*
rm -rv .git*
rm gulpfile.js
rm LICENSE
rm -rv package*
rm README.md
rm -rv .sass-cache
rm -rv .vscode

