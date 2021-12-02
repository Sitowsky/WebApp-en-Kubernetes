FROM php:8.0.11-apache
RUN apt-get update

RUN docker-php-ext-install mysqli pdo pdo_mysql
#RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copiar los archivos al VirtualHost
COPY ./site.com /var/www/html

#RUN apt-get install -qqy mariadb-server

#Start services
CMD /usr/sbin/apache2ctl -D FOREGROUND

# Asignar el puerto
EXPOSE 80


#RUN a2enmod rewrite
