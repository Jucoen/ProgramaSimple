# Usar la imagen base de PHP con Apache
FROM php:8.2-apache

# Instalar y habilitar la extensión mysqli para la conexión a MySQL
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copiar los archivos de la aplicación al contenedor
COPY . /var/www/html/mi_app_cine