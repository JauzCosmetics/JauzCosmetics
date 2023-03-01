FROM php:8.1-fpm

RUN apt-get -y update
RUN apt-get -y install git

# Instala las extensiones necesarias para Laravel
RUN docker-php-ext-install pdo pdo_mysql

# Copia los archivos de la aplicación
COPY . /var/www/html

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Copia el archivo .env
COPY .env.example .env

# Genera la clave de la aplicación
RUN php artisan key:generate

# Establece los permisos adecuados
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Instala las dependencias de Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --no-scripts --prefer-dist --optimize-autoloader
ENV COMPOSER_ALLOW_SUPERUSER 1
# Establece la variable de entorno para el contenedor
ENV APP_ENV=local

# RUN php artisan migrate
# RUN php artisan db:seed

# Expone el puerto 8100
EXPOSE 8100

# Ejecuta el comando de inicio de la aplicación
CMD php artisan serve --host=0.0.0.0 --port=8100


# # Use the official PHP image as the base image
# FROM php:8.1-apache

# RUN apt-get update && apt-get install -y git

# # Install required PHP extensions
# RUN docker-php-ext-install pdo pdo_mysql

# # Install composer
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# # Set the working directory to the Laravel application root directory
# WORKDIR /var/www/html

# # Copy the Laravel application files to the container
# COPY . /var/www/html

# # Set the ownership of the application files to the Apache user
# RUN chown -R www-data:www-data /var/www/html

# # Install the application dependencies using Composer
# RUN composer install --no-dev

# # Set the Apache document root to the public directory of the Laravel application
# ENV APACHE_DOCUMENT_ROOT /var/www/html/public
# RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
#     && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# # Enable the Apache rewrite module
# RUN a2enmod rewrite

# # Expose port 80 to the host machine
# EXPOSE 30
