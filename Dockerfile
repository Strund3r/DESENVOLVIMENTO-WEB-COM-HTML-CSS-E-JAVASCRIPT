FROM php:latest

<<<<<<< HEAD
RUN mkdir /myapp
WORKDIR /myapp

ADD . /myapp
=======
RUN mkdir /docker

ADD . /docker

WORKDIR /docker/mirrorfashion
>>>>>>> cdd03546fba781862d5642cd59137524939c898d
