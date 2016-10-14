<?php

  // Add routes here:
  // ${PATH} => ${TEMPLATE}s
  $routes = [
    '/' => 'index.twig',
    '/subpage' => 'subpage.twig',
  ];

  // ---- DO NOT EDIT BELOW HERE ---- //

  require_once __DIR__ . '/../vendor/autoload.php';

  $app = new Silex\Application();

  $app->register(new Silex\Provider\TwigServiceProvider(), [
    'twig.path' => __DIR__ . '/templates'
  ]);

  foreach ($routes as $route => $page) {
    $app->get($route, function () use ($app, $page) {
      return $app['twig']->render($page);
    });
  }

  $app->run();
