# Laboratorio Geoespacial

## Docker 

```
$ cd src/
$ mkdir app/cache/
$ chmod 777 app/cache/
$ composer install
$ docker build -t geolab .
$ docker run -p 3000:80 -v $(pwd):/usr/src/app geolab
```
