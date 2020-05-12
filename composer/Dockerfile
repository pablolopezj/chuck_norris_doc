FROM composer

RUN apk --update add gcc make g++ zlib-dev \
    && apk add autoconf

# Se agrega el usaurio que tenemos dentro de nustra compu
RUN adduser --disabled-password mariossan
USER mariossan
WORKDIR /home/mariossan

COPY script.sh /script.sh
COPY to_get_laravel.sh /to_get_laravel.sh
