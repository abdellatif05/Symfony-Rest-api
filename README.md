## Configure Database

edit DATABASE_URL on .env file

## Create database
run cmd:    

            php bin/console doctrine:database:create

## Creating the Database Tables/Schema
run cmd:    
            
            php bin/console make:migration

            php bin/console doctrine:migrations:migrate
            
## Install dependencies

            composer install

## Run server

            php -S 127.0.0.1:8000 -t public

# FEATURES

-Implementation of FOSRestBundle

-simple crud (get, cget, post, put, delete)

# TODO

-api documentation

-authentication

-authorization