FROM php:8.2-apache

# Habilitar mod_rewrite
RUN a2enmod rewrite

# Instalar extensiones de PHP necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar archivos del proyecto
COPY . /var/www/html/

# Dar permisos
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Configurar Apache
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Exponer puerto
EXPOSE 80

# Comando de inicio
CMD ["apache2-foreground"]
