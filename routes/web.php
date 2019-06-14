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

//Public
Route::get('/', 'HomeController@index')->name('homepage');


//Admin
Route::get('/admin', 'AdminController@index')->name('dashboard');
Route::get('/edit-mission/{id}', 'MissionController@edit')->name('edit-mission');
Route::post('/update-mission/{id}', 'MissionController@update')->name('update-mission');
Route::get('/edit-philosophy/{id}', 'PhilosophyController@edit')->name('edit-philosophy');
Route::post('/update-philosophy/{id}', 'PhilosophyController@update')->name('update-philosophy');
Route::get('/edit-vision/{id}', 'VisionController@edit')->name('edit-vision');
Route::post('/update-vision/{id}', 'VisionController@update')->name('update-vision');
Route::get('/overview', 'OverviewController@index')->name('overview');
Route::get('/staffs', 'StaffController@index')->name('staffs');
Route::get('/schools', 'SchoolController@index')->name('schools');
Route::get('/photos', 'GalleryController@index')->name('photos');
Route::get('/posts', 'BlogController@index')->name('posts');
Route::get('/add-post', 'BlogController@create')->name('add-post');
Route::get('/events', 'EventController@index')->name('events');
Route::get('/about-us', 'AboutController@index')->name('about-us');
Route::post('/add-photo', 'GalleryController@store')->name('add-photo');
Route::post('/add-school', 'SchoolController@store')->name('add-school');
Route::post('/add-staff', 'StaffController@store')->name('add-staff');