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

Route::group(['middleware'=>'web'], function() {

	Route::match(['get','post'],'/',['uses'=>'IndexController@execute','as'=>'home']);
	Route::get('/reviews',['uses'=>'ReviewsController@execute','as'=>'reviews']);

	Route::auth();

});

//admin/service
Route::group(['prefix'=>'admin','middleware'=>'auth'], function() {

	//admin
	Route::get('/', function() {



	});

	//admin/pages
	Route::group(['prefix'=>'pages'], function() {

		//admin/pages
		Route::get('/',['uses'=>'PagesController@execute','as'=>'pages']);

		//admin/pages/add
		Route::match(['get','post'],'/add',['uses'=>'PagesAddController@execute','as'=>'pagesAdd']);
		//admin/edit/2
		Route::match(['get','post','delete'],'/edit/{page}',['uses'=>'PagesEditController@execute','as'=>'pagesEdit']);

	});

	
	Route::group(['prefix'=>'reviews'], function() {
		
		Route::get('/',['uses'=>'ReviewsController@execute','as'=>'reviews']);
		
		Route::match(['get','post'],'/add',['uses'=>'ReviewsAddController@execute','as'=>'reviewAdd']);
		
		Route::match(['get','post','delete'],'/edit/{review}',['uses'=>'ReviewsEditController@execute','as'=>'reviewEdit']);

	});


	Route::group(['prefix'=>'vacancys'], function() {
		
		Route::get('/',['uses'=>'VacancysController@execute','as'=>'vacancys']);
		
		Route::match(['get','post'],'/add',['uses'=>'VacancysAddController@execute','as'=>'vacancyAdd']);
		
		Route::match(['get','post','delete'],'/edit/{vacancy}',['uses'=>'VacancysEditController@execute','as'=>'vacancyEdit']);
		
	});

});