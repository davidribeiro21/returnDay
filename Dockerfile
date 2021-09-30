FROM php:7.4-cli
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "php", "index.php" ]
RUN apt-get update && apt-get install -y locales && apt-get clean
RUN sed -i -e 's/# pt_BR.UTF-8/pt_BR.UTF-8/' /etc/locale.gen && \
    dpkg-reconfigure --frontend=noninteractive locales
RUN docker-php-ext-install gettext
