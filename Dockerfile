# Use the official PHP image as the base image
FROM php:8.0-apache

RUN apt-get update && apt-get install -y git

# Install required PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory to the Laravel application root directory
WORKDIR /var/www/html

# Copy the Laravel application files to the container
COPY . /var/www/html

# Set the ownership of the application files to the Apache user
RUN chown -R www-data:www-data /var/www/html

# Install the application dependencies using Composer
RUN composer install --no-dev

# Set the Apache document root to the public directory of the Laravel application
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Enable the Apache rewrite module
RUN a2enmod rewrite

# Expose port 80 to the host machine
EXPOSE 80
