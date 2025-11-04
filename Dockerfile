FROM php:8.2-apache

# Instalar extensiones de PHP necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilitar mod_rewrite
RUN a2enmod rewrite

# Copiar archivos del proyecto
COPY . /var/www/html/

# Configurar permisos
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Configurar Apache para usar el puerto de Railway
RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# Configurar ServerName
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Habilitar .htaccess
RUN echo '<Directory /var/www/html/>\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>' > /etc/apache2/conf-available/docker-php.conf \
    && a2enconf docker-php

# Script de inicio para configurar el puerto dinámicamente
RUN echo '#!/bin/bash\n\
sed -i "s/Listen 80/Listen ${PORT:-80}/" /etc/apache2/ports.conf\n\
sed -i "s/:80/:${PORT:-80}/" /etc/apache2/sites-available/000-default.conf\n\
apache2-foreground' > /start.sh && chmod +x /start.sh

EXPOSE ${PORT:-80}

CMD ["/start.sh"]
