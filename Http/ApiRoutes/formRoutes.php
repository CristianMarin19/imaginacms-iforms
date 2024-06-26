<?php

use Illuminate\Routing\Router;

Route::prefix('forms')->group(function (Router $router) {
    //Route create
    $router->post('/', [
        'as' => 'api.iforms.forms.create',
        'uses' => 'FormApiController@create',
        'middleware' => ['auth:api'],
    ]);

    //Route index
    $router->get('/', [
        'as' => 'api.iforms.forms.get.items.by',
        'uses' => 'FormApiController@index',
        'middleware' => ['auth:api'],
    ]);

    //Route show
    $router->get('/{criteria}', [
        'as' => 'api.iforms.forms.get.item',
        'uses' => 'FormApiController@show',
        //'middleware' => ['auth:api']
    ]);

    //Route update
    $router->put('/fields', [
        'as' => 'api.iforms.forms.fields.batch.update',
        'uses' => 'FieldApiController@batchUpdate',
        'middleware' => ['auth:api'],
    ]);

    //Route update
    $router->put('/blocks', [
        'as' => 'api.iforms.forms.blocks.batch.update',
        'uses' => 'BlockApiController@batchUpdate',
        'middleware' => ['auth:api'],
    ]);

    //Route update
    $router->put('/{criteria}', [
        'as' => 'api.iforms.forms.update',
        'uses' => 'FormApiController@update',
        'middleware' => ['auth:api'],
    ]);

    //Route delete
    $router->delete('/{criteria}', [
        'as' => 'api.iforms.forms.delete',
        'uses' => 'FormApiController@delete',
        'middleware' => ['auth:api'],
    ]);
});
