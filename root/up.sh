#!/usr/bin/env sh

git add .
git commit -m "update"
git push

cd /srv/http/website/root/
git pull
