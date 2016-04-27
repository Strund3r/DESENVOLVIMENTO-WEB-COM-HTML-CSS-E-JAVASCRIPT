FROM php:latest

RUN mkdir /docker

ADD . /docker

WORKDIR /docker/mirrorfashion
