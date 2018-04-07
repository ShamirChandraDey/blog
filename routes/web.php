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

Route::group(['middleware' =>'web','auth'], function () {
	  Route::get('/home', function() {
    if (Auth::user()->admin == 0) {
      return view('adminlte::home');
    } 
	else if (Auth::user()->admin == 1){
return view('adminlte::adminhome');		
	}
  });
Route::get('/carlist', 'PagesController@carlist')-> middleware('authenticated') ;
Route::get('/update', 'PagesController@update')-> middleware('authenticated') ;
Route::get('/delete', 'PagesController@delete')-> middleware('authenticated') ;
Route::get('/carlistsd', 'PagesController@carlistsd')-> middleware('authenticated') ;

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
