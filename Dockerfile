FROM phpswoole/swoole:php7.4
COPY vendor /var/vendor
COPY src/main/php /var/www
COPY src/main/resources /var/www



