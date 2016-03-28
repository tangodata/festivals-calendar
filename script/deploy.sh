#!/bin/bash

# Deploy the stuffs to GH-PAGES

rev=$(git rev-parse --short HEAD)

cd site

git init
git config user.name "KaceO"
git config user.email "kaceong@gmail.com"

git remote add upstream "https://$GH_TOKEN@github.com/tangodata/festivalscalendar.git"

git fetch upstream && git reset upstream/gh-pages

# echo "festivalscalendar.data.tangueros.net" > CNAME

touch .

git add -A .
git commit -m "Rebuilt Automatic at ${rev}"
git push -q upstream HEAD:gh-pages

