#!/bin/bash

rsync -rv . pink:/var/www/cours --exclude=.git
