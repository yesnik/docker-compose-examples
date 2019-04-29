# Docker php, nginx, mariadb

This project connects 3 containers:

- [php](https://hub.docker.com/_/php/)
- [nginx](https://hub.docker.com/_/nginx)
- [mariadb](https://hub.docker.com/_/mariadb/)

## Software Requirements

- Your OS must have [Docker CE](https://docs.docker.com/install/) to be installed.

## Installation

- Clone this repo: `git clone ...`

- Run containers:

```
cd docker-nginx-php-mariadb
docker-compose up --build
``` 

- Open URL in the browser: http://127.0.0.1:8080/

- See the output of the script `public_html/index.php`
