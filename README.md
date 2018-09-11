# docker-lamp
Dockerand docker-compose 

- Apache
	- mod_rewrite
	- GD
- php 5.6.28 or 7.1
- MySql 5.7
- PhpMyAdmin

* Operation check
- php5.6.28
	- ✅ baserCMS 3.0.16
	- ✅ Wordpress 4.9.8 
- php7.1
	- ✅ baserCMS 4.1.3
	- ✅ Wordpress 4.9.8

## Advance preparation

- [Docker Desktop](https://www.docker.com/products/docker-desktop)
- [Docker Compose](https://docs.docker.com/compose/install/)

## How to set up

```
$ cd dockker-lamp-php5.6
$ docker-compose build
$ docker-compose up
```

You can access [http://localhost:8080/](http://localhost:8080/)

## Directory

```
├ public_html : Document root
├ docker-compose.yml
└ docker
  ├ web
    ├ Dockerfile : php veersion, apache install
    ├ base.conf : <VirtualHost *:80>
    ├ php.ini
  ├ db
    ├ Dockerfile : mysql install
    ├ my.cnf
  ├ logs : server log
```


## How to change PHP version

Please edit ```docker/web/Dockerfile```

### php5.6
```Dockerfile:docker/web/Dockerfile
FROM php:5.6.28-apache
# FROM php:7.1-apache
```
### php7.1
```Dockerfile:docker/web/Dockerfile
# FROM php:5.6.28-apache
FROM php:7.1-apache
```

## MySQL

phpMyAdmin : [http://localhost:8088/](http://localhost:8088/)

- database host : 192.168.202.2 (default)
- database user : root
- database pass : root
- database port : 3308