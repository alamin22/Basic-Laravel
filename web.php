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

route::get('/home', function () {
	return 'hi alamin in laravel';
});

Route::get('/help/{id}/{name}', function ($id,$name) {
	return 'thanks to visit our site id :'.$id. 'name: '.$name;
});

route::get('/workerList', function () {
     $name='alamin';
     $id='1402039';
     $dept='cse';
     $address='joypurhat';
	return view('ownView',compact('name','id','dept'))->with('myAddress',$address);
});

route::get('/page','myController@laravel');

route::get('/insertForm','myController@insertForm');
route::post('/insertData','myController@insertData');
route::get('/viewData','myController@viewData');
route::get('/deleteData/{id}','myController@deleteData');
route::get('/editViewData/{id}','myController@editViewData');
route::post('/editViewData/{id}','myController@updateData');

