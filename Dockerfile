FROM php:7.2-apache
COPY index.php /var/www/html/
RUN docker-php-ext-install pdo pdo_mysql
EXPOSE 80