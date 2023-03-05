FROM php:8.1-fpm-alpine

# Use apk(alpine package manager) to install shadow(need to change user groups)
# Add use default(id=1000) to www-data group
RUN apk --no-cache add shadow && usermod -u 1000 www-data

RUN mkdir -p /var/www/html

# Download install and config php ext
RUN docker-php-ext-install pdo pdo_mysql