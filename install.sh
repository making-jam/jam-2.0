#!/usr/bin/env bash

git remote add staging git@heroku.com:jam2staging.git
heroku config:add BUILDPACK_URL=https://github.com/heroku/heroku-buildpack-php --app jam2staging

git remote add production git@heroku.com:jam2production.git
heroku config:add BUILDPACK_URL=https://github.com/heroku/heroku-buildpack-php --app jam2production

sudo npm install
bower install

gulp sass js