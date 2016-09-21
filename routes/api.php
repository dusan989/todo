<?php

use Dingo\Api\Routing\Router;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api = app(Router::class);

$api->version('v1', [
    'middleware' => [
        'api.throttle',
        'cors',
    ],
    'limit' => 100,
    'expires' => 5,
], function ($api) {
    $api->group([
        'prefix' => 'users',
        'middleware' => 'api.auth',
    ], function ($api) {
        $api->get('me', [
            'as' => 'users.me',
            'middleware' => 'api.auth',
            'uses' => 'TodoApi\Http\Controllers\UserController@me',
        ]);
    });

    $api->group([
        'prefix' => 'todos',
        'middleware' => 'api.auth',
    ], function ($api) {
        $api->get('/', [
            'as' => 'todos.index',
            'uses' => 'TodoApi\Http\Controllers\TodoController@index',
        ]);

        $api->get('/{uuid}', [
            'as' => 'todos.show',
            'uses' => 'TodoApi\Http\Controllers\TodoController@show',
        ]);

        $api->delete('/{uuid}', [
            'as' => 'todos.destroy',
            'uses' => 'TodoApi\Http\Controllers\TodoController@destroy',
        ]);
    });

    $api->post('login', [
        'as' => 'auth.login',
        'uses' => 'TodoApi\Http\Controllers\AuthController@login',
    ]);

    $api->post('register', [
        'as' => 'auth.register',
        'uses' => 'TodoApi\Http\Controllers\AuthController@register',
    ]);
});
