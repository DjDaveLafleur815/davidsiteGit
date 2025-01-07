# Utilisation de l'image PHP officielle
FROM php:8.2-fpm

# Installation des dépendances système
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    git \
    libssl-dev \
    && apt-get clean

# Installer l'extension MongoDB
RUN pecl install mongodb \
    && docker-php-ext-enable mongodb

# Installer les extensions PHP nécessaires
RUN docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql

# Installation de Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Définir le répertoire de travail
WORKDIR /var/www

# Copier le fichier composer.json et installer les dépendances PHP
COPY composer.json composer.lock ./
RUN composer install --no-autoloader

# Copier tous les fichiers du projet Laravel dans le conteneur
COPY . .

# Autoloader des dépendances PHP
RUN composer dump-autoload

# Exposer le port de l'application
EXPOSE 9000

# Démarrer le serveur PHP
CMD ["php-fpm"]
