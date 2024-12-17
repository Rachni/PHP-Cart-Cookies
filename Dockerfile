# Usa la imagen base oficial de PHP 7.4 con Apache
FROM php:7.4-apache

# Configura ServerName para evitar advertencias
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Instala extensiones de PHP requeridas
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    unzip \
    && docker-php-ext-install pdo_mysql gd zip

# Copia el contenido del proyecto al directorio web de Apache
COPY . /var/www/html/

# Ajusta permisos
RUN chown -R www-data:www-data /var/www/html

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs

# Expone el puerto 8080 para Railway
EXPOSE 8080

# Comando de inicio de Apache
CMD ["apache2-foreground"]
