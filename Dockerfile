FROM php:7.3-cli-bullseye

RUN apt-get update && apt-get install -y git zip
