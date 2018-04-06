FROM ubuntu:16.04

RUN apt update && apt install -y php7.0 php7.0-curl php7.0-mbstring php7.0-xml composer wget tar bzip2 zip

RUN mkdir /sdk_php
COPY . /sdk_php
WORKDIR /sdk_php
RUN composer install

CMD vendor/bin/paratest -p 1