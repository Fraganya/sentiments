<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', "AppController@index");


$router->group(['prefix' => "api",], function () use ($router) {


    $router->post('register', "AuthController@register");
    $router->post('authenticate', "AuthController@authenticate");

    $router->group(['middleware' => "auth"], function () use ($router) {

        // sentiment box management
        $router->post('box/store', "BoxController@store");
        $router->post('box/update', "BoxController@update");
        $router->post('box/destroy', "BoxController@destroy");
    });
});
