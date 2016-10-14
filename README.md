# Catch Simple Static Site

![Level Up](https://m.popkey.co/e2a8a7/VWzN3.gif)

Silex based static site framework with Twig

## Setup
Run `composer install` from the root folder.

## Adding Pages
In the `./docroot/index.php` file add to the `$routes` array `${path} => ${TEMPLATE}`.

## Using Twig
All `{% include %}s, {% embed %}s, {% extend %}s` are relative to the `./docroot/templates` directory.
