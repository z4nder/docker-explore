FROM php:8.1-fpm-alpine

RUN mkdir -p /var/www/html

ADD ./src/ /var/www/html

# Use apk(alpine package manager) to install shadow(need to change user groups)
# Add use default(id=1000) to www-data group
RUN apk --no-cache add shadow && usermod -u 1000 www-data

# Download install and config php ext
RUN docker-php-ext-install pdo pdo_mysql