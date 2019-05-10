<?php

use JasperPHP\JasperPHP as JasperPHP;

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

//Route::get('/', function () {
    //return view('welcome');
//});
Route::get('/','HomeController@index');
Route::get('/process','HomeController@process');
Route::get('/test','HomeController@test');

//Route::get('/', function(){
    //$jasper = new JasperPHP;

        //// Compile a JRXML to Jasper
        //$jasper->compile(base_path('/vendor/cossou/jasperphp/examples/hello_world.jrxml'))->execute();

        //// Process a Jasper file to PDF and RTF (you can use directly the .jrxml)
        //$jasper->process(
            //base_path('/vendor/cossou/jasperphp/examples/hello_world.jasper'),
            //true,
            //array("pdf", "rtf"),
            //array("php_version" => phpversion())
        //)->execute();

        //// List the parameters from a Jasper file.
        //$array = $jasper->list_parameters(
            //base_path('/vendor/cossou/jasperphp/examples/hello_world.jasper')
        //)->execute();

        //return view('welcome');
//});
