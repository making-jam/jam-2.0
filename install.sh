#!/usr/bin/env bash

git remote add staging git@heroku.com:jam2staging.git
git remote add production git@heroku.com:jam2production.git

sudo npm install
bower install

gulp sass js