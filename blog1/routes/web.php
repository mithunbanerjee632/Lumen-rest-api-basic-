<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
//__Basic CURD Operation__//

$router->get('/details', 'DetailsController@DetailsSelect');
$router->post('/details', 'DetailsController@DetailsCreate');
$router->put('/details', 'DetailsController@DetailsUpdate');
$router->delete('/details', 'DetailsController@DetailsDelete');

//__Query Builder Operation__//

$router->get('/builder','QbuilderController@AllRows');
$router->get('/builder','QbuilderController@Rows'); //first,find,pluck method
$router->get('/builder','QbuilderController@aggregts'); //aggregate method

$router->post('/insupdel','QbuilderController@Insert');
$router->put('/insupdel','QbuilderController@Update');
$router->delete('/insupdel','QbuilderController@Delete');

//__Eloquent ORM Operation__//

//without authenticate
//$router->get('/select','EloquentController@selectAll');

//with authenticate
$router->get('/select',['middleware'=>'auth','uses'=>'EloquentController@selectAll']);




$router->post('/select','EloquentController@selectedById');

$router->get('/count','EloquentController@count');
$router->get('/max','EloquentController@max');
$router->get('/min','EloquentController@min');
$router->get('/avg','EloquentController@avg');
$router->get('/sum','EloquentController@sum');

$router->post('/eloinsert','EloquentController@Insert');
$router->post('/elodelete','EloquentController@Delete');
$router->post('/eloupdate','EloquentController@Update');

