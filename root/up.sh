#!/usr/bin/env sh

git add .
git commit -m "update"
git push

cd /srv/httpd/website/root/
git pull
