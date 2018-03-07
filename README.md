Example - Skeleton App
================

This repository contains a working example of the most basic app built with the Rivera Framework.

## Install

This example can be installed in two easy steps:

1. Clone the repository 

        git clone https://github.com/riveraframework/example-skeleton.git
        
2. Install the vendors

        php composer.phar install


## Run the app

### LAMP stack on host

1. Add the following line to your hosts file:

        127.0.0.1 rf-skeleton.local

2. Create the `rf-skeleton.local` vhost pointing to the `public` folder of the project.

3. Open [http://rf-skeleton.local/](http://rf-skeleton.local/) in your favorite browser!


### Docker

1. Add the following line to your hosts file:

        127.0.0.1 rf-skeleton.local

2. Then run this example using docker-compose:

        docker-compose up
        
3. Open [http://rf-skeleton.local:8080/](http://rf-skeleton.local:8080/) in your favorite browser!

## Run a command

### From the project

    php app/tasks/cmd-example.php

### From Docker

    docker exec -it rf_skeleton_app php /var/www/app/tasks/cmd-example.php


