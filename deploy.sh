#!/bin/bash

rsync -rv . orange:/srv/www/cours --exclude=.git
