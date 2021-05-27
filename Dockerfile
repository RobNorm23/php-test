FROM phpswoole/swoole:php7.4
COPY src/vendor /var/www/vendor
COPY src/app /var/www/app
COPY src/server.php /var/www



