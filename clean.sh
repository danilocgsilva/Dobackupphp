#!/bin/bash


# Removes the development assets. Run this script before sending to the server.
rm -rvf assets
rm composer*
rm -rvf .git*
rm gulpfile.js
rm LICENSE
rm -rvf package*
rm README.md
rm -rvf .sass-cache
rm -rvf .vscode

