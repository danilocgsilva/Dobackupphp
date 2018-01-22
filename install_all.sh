#!/bin/bash

# Halts the scripts in case of error
set -e

# Loads components. Must hav in the system the composer, npm and gulp.
composer install
composer update
npm install
gulp

echo Finished!