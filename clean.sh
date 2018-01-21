#!/bin/bash


# Removes the development assets. Run this script before sending to the server.
rm -rv assets
rm composer*
rm -rv .git*
rm gulpfile.js
rm LICENSE
rm -rv package*
rm README.md
rm -rv .sass-cache
rm -rv .vscode

