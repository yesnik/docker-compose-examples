# PHP-FPM with Docker

This project starts PHP-FPM in the container.

It's possible to connect to PHP-FPM only via FastCGI protocol. We can't do it via browser.

[FastCGI](https://en.wikipedia.org/wiki/FastCGI) is a *binary protocol* for interfacing interactive 
programs with a web server. 
It is a variation on the earlier Common Gateway Interface (CGI).

We need to install this tool:
```
sudo apt install libfcgi0ldbl
```

Run this command to receive response from PHP-FPM:

```bash
SCRIPT_NAME=index.php \
SCRIPT_FILENAME=index.php \
REQUEST_METHOD=GET \
cgi-fcgi -bind -connect 127.0.0.1:9000
```

## Links

- [Directly connect to PHP-FPM](https://easyengine.io/tutorials/php/directly-connect-php-fpm/)
