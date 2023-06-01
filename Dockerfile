FROM php:8.2-fpm

#Get latest composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN pecl install -o -f pcov && \
    rm -rf /tmp/pear && \
    docker-php-ext-enable pcov

WORKDIR /tmp

RUN apt-get update && \
    apt-get install -y \
        unzip \
        wget && \
    wget -q https://binaries.sonarsource.com/Distribution/sonar-scanner-cli/sonar-scanner-cli-4.8.0.2856-linux.zip && \
    unzip sonar-scanner-cli-4.8.0.2856-linux.zip && \
    rm /tmp/sonar-scanner-cli-4.8.0.2856-linux.zip && \
    mv sonar-scanner-4.8.0.2856-linux /var/opt && \
    ln -s /var/opt/sonar-scanner-4.8.0.2856-linux/bin/sonar-scanner /usr/local/bin/

WORKDIR /var/www/html/public

COPY . .