# Docker Nginx PHP

This project creates nginx container and links it with php container.

- We use `volumes` to copy config file into container
- For PHP we use modified `docker/php/php.ini-development` that we got from container *php:7.3-fpm*
- Note, that we placed value for variable `PHP_INI_DIR` in `.env` file
