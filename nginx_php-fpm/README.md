# Nginx, PHP-FPM with Docker

This project creates nginx container and links it with php-fpm container.

- We use `volumes` to pass config file into container
- `PHP_INI_DIR` is defined inside `php-fpm` image
- We tell nginx to use Docker DNS service:
  ```
  resolver 127.0.0.11 ipv6=off;
  ```
