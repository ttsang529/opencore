<?php
/*
 * Created on Fri Dec 13 2019 by DaRock
 *
 * Aweb Design
 * https://www.awebdesign.ro
 *
 */

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->group([
    'namespace' => 'Core',
    'prefix' => 'core'
], function ($router) {
    $router->get('home', 'HomeController@index');
});

/*$router->get('common/header', [
    'as' => 'common/header', 'uses' => 'ExampleController@index'
]);

$router->get('common/footer', [
    'as' => 'common/footer', 'uses' => 'Core\HomeController@index'
]);*/

/* $router->get('extension/module/awebcore', [
    'as' => 'extension/module/awebcore', 'uses' => 'ExampleController@index'
]); */

/* $router->get('example', [
    'as' => 'example', 'uses' => 'ExampleController@index'
]); */
