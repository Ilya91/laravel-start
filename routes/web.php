<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', 'TestController@show');
Route::get('/admin', 'Admin\MainController@show');

/*Route::post('/comments',function () {

	print_r($_POST);

});*/


/*Route::match(['get','post'],'/comments',function () {

	print_r($_POST);

});*/

/*Route::any('/comments',function () {

	print_r($_POST);

});*/
/*
Route::get('/page/{id}',function ($id) {

    echo $id;

});*/

/*Route::get('/page/{id}/{cat}',function($var1) {

    echo '<pre>';

    echo $var1;
    //print_r($_ENV);
    //echo config('app.locale');
    //echo Config::set('app.locale','ru');
    //echo Config::get('app.locale');
    ///echo env('APP_ENV');

    echo '</pre>';

})->where(['id'=>'[0-9]+','cat'=>'[A-Za-z]+']);*/
