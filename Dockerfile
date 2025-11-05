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

# Habilitar .htaccess y configuración de directorios
RUN echo '<Directory /var/www/html/>\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
    \n\
    <FilesMatch \.php$>\n\
        SetHandler application/x-httpd-php\n\
    </FilesMatch>\n\
</Directory>' > /etc/apache2/conf-available/docker-php.conf \
    && a2enconf docker-php

# Configurar Apache para el puerto dinámico de Railway
RUN echo '#!/bin/bash\n\
PORT=${PORT:-80}\n\
sed -i "s/Listen 80/Listen $PORT/" /etc/apache2/ports.conf\n\
sed -i "s/:80/:$PORT/" /etc/apache2/sites-available/000-default.conf\n\
sed -i "s/VirtualHost \\*:80/VirtualHost *:$PORT/" /etc/apache2/sites-available/000-default.conf\n\
apache2-foreground' > /start.sh && chmod +x /start.sh

# Configurar ServerName
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Asegurar que PHP esté habilitado en Apache
RUN a2enmod php

EXPOSE ${PORT:-80}

CMD ["/start.sh"]
