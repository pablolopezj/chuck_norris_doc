FROM php:7.4-fpm

RUN  apt-get update -y \
	&&  apt-get install -y apt-utils  \
    &&  apt-get install -y curl \
    &&  apt-get install -y unzip \
	&&  apt-get install -y dbconfig-common \
	&&  apt-get install -y libcurl4-openssl-dev 

#RUN curl -sS -o /tmp/icu.tar.gz -L http://download.icu-project.org/files/icu4c/57.1/icu4c-57_1-src.tgz && tar -zxf /tmp/icu.tar.gz -C /tmp && cd /tmp/icu/source && ./configure --prefix=/usr/local && make && make install

#RUN docker-php-ext-configure intl
#RUN docker-php-ext-install intl

#RUN docker-php-ext-install mbstring

#RUN pecl install uopz
#RUN docker-php-ext-enable uopz

# Install Composer
#RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html
