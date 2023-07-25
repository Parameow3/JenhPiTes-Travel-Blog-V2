FROM debian:latest
RUN apt update
RUN apt install npm -y
RUN dpkg -l | grep php | tee packages.txt
RUN apt install -y apt-transport-https
RUN apt install -y lsb-release
RUN apt install -y ca-certificates
RUN apt install -y wget
RUN wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
RUN sh -c 'echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list'
RUN apt update
RUN apt install -y php8.2 php8.2-cli
RUN apt install -y php8.2-fpm
RUN apt update
RUN apt install -y curl unzip
RUN apt install -y php php-curl
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN apt install -y php8.2-fpm php8.2-ctype php8.2-curl php8.2-dom php8.2-Fileinfo
RUN apt install -y filter php8.2-Mbstring php8.2-pdo php8.2-Tokenizer php8.2-XML php8.2-mysql
RUN apt install php-fpm
RUN apt install -y nginx

COPY . /var/www/app
WORKDIR /var/www/app
RUN chown -R www-data:www-data /var/www/app
RUN chmod -R 775 /var/www/app
RUN cd /var/www/app
RUN composer install
RUN composer update
RUN npm install
RUN npm update
RUN npm run build

RUN cp /var/www/app/localhost.conf /etc/nginx/sites-available
RUN ln -s /etc/nginx/sites-available/localhost.conf /etc/nginx/sites-enabled
RUN rm /etc/nginx/sites/enabled/default

RUN service nginx restart
EXPOSE 80
