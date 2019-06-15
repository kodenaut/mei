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
Route::get('/about-us', 'AboutController@index')->name('about-us');
Route::get('/our-posts', 'BlogController@posts')->name('our-posts');
Route::get('/our-events', 'EventController@events')->name('our-events');


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
Route::get('/add-event', 'EventController@create')->name('add-event');
Route::get('/events', 'EventController@index')->name('events');
Route::post('/add-photo', 'GalleryController@store')->name('add-photo');
Route::post('/add-school', 'SchoolController@store')->name('add-school');
Route::post('/update-school/{id}', 'SchoolController@update')->name('update-school');
Route::post('/add-staff', 'StaffController@store')->name('add-staff');
Route::post('/update-staff/{id}', 'StaffController@update')->name('update-staff');
Route::get('/partners', 'PartnerController@index')->name('partners');
Route::post('/add-partner', 'PartnerController@store')->name('add-partner');
Route::post('/update-partner/{id}', 'PartnerController@update')->name('update-partner');
