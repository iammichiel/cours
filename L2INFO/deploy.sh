#!/bin/bash

rsync -rv . purple:/srv/www/l2info \
	--exclude=.git \
	--exclude=node_modules \
	--exclude=package.json \
	--exclude=LICENCE \
	--exclude=README.md \
	--exclude=test
