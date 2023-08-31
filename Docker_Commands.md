### build Image
``
docker build -t Name:tag .
``

### rename Tag
``
docker tag OldName:tag NewName:tag
``

### run composer
``
docker run --rm -u $(id -u):$(id -g) -it -v $PWD:/app composer:2.5 install
``

### run alpine linux
``
docker run --rm -it -v .:/opt alpine /bin/sh
``

### run php cli
``
docker run --rm -u $(id -u):$(id -g) -it -v $PWD:/app php:8.2-cli php /app/test.php
``