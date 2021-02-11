# PHP DDD

Base para una aplicación PHP usando Domain-Driven Design (DDD) y arquitectura hexagonal.

## Intalación

Instalar las dependencias con `composer install`

## Arquitectura

### Arquitectura hexagonal

El diseño de la aplicación deberá seguir las recomendaciones de la arquitectura hexagonal mediante tres capas principales, aplicación, dominio e infraestructura, ésta se encuentra en la carpeta **src/**.

El diseño estará repartido en módulos y cada módulo contendrá:
- ```Aplication``` contendrá los comandos, handlers, cuyo objetivo es convertir peticiones externas, en peticiones a tu capa de dominio.
- ```Domain``` contendrá la lógica de negocio repartida en modelos y servicios de dominio.
- ```Infrastructure``` contendrá la implementación en tecnologías o servicios externos concretos de las dependencias de tu capa de dominio, como por ejemplo, los repositorios (para mongo, mysql, postgresql, etc).

Además tenemos un moódulo compartido denominado Shared en el que se encontrarán utilidades, lógicas y servicios compartidos por otros módulos

### App

En este caso utilizamos en framework Symfony para interacturar con las entradas y salidas de nuestra aplicación, ésta se encuentra en la carpeta **app/**.

## Tests

Los tests están divididos como nuestra arquitectura:
- Los tests de aceptación se realizarán mediante behat `vendor/bin/behat`
- Los tests de infraestructura y unitarios se realizan mediante phpunit `vendor/bin/phpunit`

## Enlaces de interés

[Arquitectura hexagonal](https://codely.tv/blog/screencasts/arquitectura-hexagonal-ddd/)
[SYMFONY](https://symfony.com/doc/current/index.html)
[PHPUNIT](https://phpunit.de/)
[BEHAT](https://docs.behat.org/en/latest/)