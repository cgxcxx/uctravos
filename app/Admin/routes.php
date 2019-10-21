<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->get('users', 'UsersController@index');
    $router->get('partners', 'PartnersController@index');
    $router->get('partners/create', 'PartnersController@create');
    $router->get('partners/{id}/edit', 'PartnersController@edit');
    $router->put('partners/{id}', 'PartnersController@update');
    $router->delete('partners/{id}', 'PartnersController@destroy');
    $router->post('partners', 'PartnersController@store');
    $router->get('guests', 'GuestsController@index');
    $router->get('guests/create', 'GuestsController@create');
    $router->get('guests/{id}/edit', 'GuestsController@edit');
    $router->put('guests/{id}', 'GuestsController@update');
    $router->delete('guests/{id}', 'GuestsController@destroy');
    $router->post('guests', 'GuestsController@store');
    $router->get('contacts', 'ContactsController@index');
    $router->get('contacts/create', 'ContactsController@create');
    $router->get('contacts/{id}/edit', 'ContactsController@edit');
    $router->put('contacts/{id}', 'ContactsController@update');
    $router->delete('contacts/{id}', 'ContactsController@destroy');
    $router->post('contacts', 'ContactsController@store');
});
