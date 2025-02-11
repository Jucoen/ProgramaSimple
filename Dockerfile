FROM php:8.3-apache

# Copy application files
COPY . /var/www/html/calculadora

# Update package lists and install required dependencies in a single step
RUN apt-get update && apt-get install -y \
    apt-utils nano zip unzip git curl gnupg \
    && docker-php-ext-install mysqli pdo pdo_mysql \
    && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');" \
    && mv composer.phar /usr/local/bin/composer \
    && curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.deb.sh' | bash \
    && apt-get update && apt-get install -y symfony-cli \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Set the command to run Apache
CMD ["apache2-foreground"]