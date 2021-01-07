<?php

/** @var Route $router */
$router->get('accountmanagers/{id}', [
    'as' => 'web_accountmanager_show',
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:web',
    ],
]);