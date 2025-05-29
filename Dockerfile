# Use an official PHP image as the base
FROM php:8.0-apache

# Install necessary PHP extensions and Composer
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev unzip git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && rm -rf /var/lib/apt/lists/*

# Set the working directory to the Laravel project
WORKDIR /var/www/html

# Copy the Laravel files to the container
COPY . .

# Install PHP dependencies using Composer
RUN composer install --no-dev --optimize-autoloader

# Enable Apache mod_rewrite for Laravel
RUN a2enmod rewrite

# Set up the document root
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Configure Apache
COPY ./docker/apache.conf /etc/apache2/sites-available/000-default.conf

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
