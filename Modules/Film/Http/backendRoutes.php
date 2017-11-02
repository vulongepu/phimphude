<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/film'], function (Router $router) {

    $router->get('create', [
        'as' => 'admin.film.create',
        'uses' => 'FilmController@create',
    ]);


});
