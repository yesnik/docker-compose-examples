# Docker php, nginx, mariadb

This project uses 3 Docker images:

- [php](https://hub.docker.com/_/php/)
- [nginx](https://hub.docker.com/_/nginx)
- [mariadb](https://hub.docker.com/_/mariadb/)

## Software Requirements

- Ensure that you have [Docker CE](https://docs.docker.com/install/) on your PC.

## Installation

- Clone this repo: `git clone ...`

- Run containers:

```
cd docker-nginx-php-mariadb
docker compose up --build
``` 

- Open URL in the browser: http://127.0.0.1:8080/
