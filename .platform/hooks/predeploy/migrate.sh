#!/bin/bash

export $(grep -v '^#' /var/app/staging/.env | xargs)
php /var/app/staging/artisan migrate --force