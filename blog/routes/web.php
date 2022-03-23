<?php
use App\Http\Controllers\MyController;

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

$router->get('/get', function () use ($router) {
    return "I am Get";
});

$router->post('/post',function() use ($router){
    return "I am Post";
});
$router->put('/put',function() use ($router){
    return "I am Put";
});
$router->delete('/delete',function() use ($router){
    return "I am Delete";
});

//__required parameter__//

$router->post('/name/{namevalue}/age/{agevalue}',function($namevalue,$agevalue){
    return $namevalue.$agevalue;
});

//__Optional parameter__//

$router->post('/{name}/{age}[/{city}]',function($name,$age,$city=null){
    return $name.$age.$city;
});

//$router->get('/',[MyController::class,'myFunc']);

//$router->get('/{name}','MyController@myFunc');
//$router->get('/','MyController@myFunc');
/** 
* $router->get('/first','MyController@first');
* $router->get('/second','MyController@second');
*$router->get('/download','MyController@download');
  
 **/

 $router->post('/catch','MyController@Catch');

