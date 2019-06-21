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
Route::get('/show-post/{id}', 'BlogController@show')->name('show-post');
Route::get('/our-events', 'EventController@events')->name('our-events');
Route::get('/our-photos', 'GalleryController@photos')->name('our-photos');
Route::get('/our-schools', 'SchoolController@schools')->name('our-schools');
Route::get('/our-courses/{id}', 'CourseController@courses')->name('our-courses');
Route::get('/our-staffs', 'StaffController@staffs')->name('our-staffs');
Route::get('/background', 'AboutController@background')->name('background');
Route::get('/chancellor-message', 'AboutController@chancellor')->name('chancellor');
Route::get('/principal-message', 'AboutController@principal')->name('principal');


Route::get('/fee-structure', 'FeeController@engineering')->name('fee-structure');
Route::get('/engineering-fee', 'FeeController@engineeringfee')->name('engineering-fee');
Route::get('/ict-fee', 'FeeController@ictfee')->name('ict-fee');
Route::get('/icdl-fee', 'FeeController@icdlfee')->name('icdl-fee');
Route::get('/hospitality-fee', 'FeeController@hospitalityfee')->name('hospitality-fee');
Route::get('/catering-fee', 'FeeController@cateringfee')->name('catering-fee');
Route::get('/journalism-fee', 'FeeController@journalismfee')->name('journalism-fee');
Route::get('/business-fee', 'FeeController@businessfee')->name('business-fee');
Route::get('/languages-fee', 'FeeController@languagesfee')->name('languages-fee');
Route::get('/sports-fee', 'FeeController@sportsfee')->name('sports-fee');

Route::post('/save-message', 'MessageController@store')->name('save-message');


//Admin
Route::get('/admin', 'AdminController@index')->name('dashboard');

Route::get('/edit-mission/{id}', 'MissionController@edit')->name('edit-mission');
Route::post('/update-mission/{id}', 'MissionController@update')->name('update-mission');
Route::get('/edit-philosophy/{id}', 'PhilosophyController@edit')->name('edit-philosophy');
Route::post('/update-philosophy/{id}', 'PhilosophyController@update')->name('update-philosophy');
Route::get('/edit-vision/{id}', 'VisionController@edit')->name('edit-vision');
Route::post('/update-vision/{id}', 'VisionController@update')->name('update-vision');


Route::get('/overview', 'OverviewController@index')->name('overview');
Route::get('/add-overview', 'OverviewController@create')->name('add-overview');
Route::post('/save-overview', 'OverviewController@store')->name('save-overview');
Route::get('/edit-overview/{id}', 'OverviewController@edit')->name('edit-overview');
Route::post('/update-overview/{id}', 'OverviewController@update')->name('update-overview');
Route::post('/delete-overview/{id}', 'OverviewController@destroy')->name('delete-overview');

Route::get('/posts', 'BlogController@index')->name('posts');
Route::get('/view-post/{id}', 'BlogController@view')->name('view-post');
Route::get('/add-post', 'BlogController@create')->name('add-post');
Route::post('/save-post', 'BlogController@store')->name('save-post');
Route::get('/edit-post/{id}', 'BlogController@edit')->name('edit-post');
Route::post('/update-post/{id}', 'BlogController@update')->name('update-post');
Route::post('/delete-post/{id}', 'BlogController@destroy')->name('delete-post');

Route::get('/our-notices', 'NoticeController@notices')->name('our-notices');
Route::get('/view-notice/{id}', 'NoticeController@view')->name('view-notice');

Route::get('/events', 'EventController@index')->name('events');
Route::get('/add-event', 'EventController@create')->name('add-event');
Route::post('/save-event', 'EventController@store')->name('save-event');
Route::get('/edit-event/{id}', 'EventController@edit')->name('edit-event');
Route::post('/update-event/{id}', 'EventController@update')->name('update-event');
Route::post('/delete-event/{id}', 'EventController@destroy')->name('delete-event');

Route::get('/photos', 'GalleryController@index')->name('photos');
Route::post('/add-photo', 'GalleryController@store')->name('add-photo');
Route::post('/update-photo/{id}', 'GalleryController@update')->name('update-photo');
Route::post('delete-photo/{id}', 'GalleryController@destroy')->name('delete-photo');

Route::get('/schools', 'SchoolController@index')->name('schools');
Route::post('/add-school', 'SchoolController@store')->name('add-school');
Route::post('/update-school/{id}', 'SchoolController@update')->name('update-school');
Route::post('/delete-school/{id}', 'SchoolController@destroy')->name('delete-school');

Route::get('/staffs', 'StaffController@index')->name('staffs');
Route::post('/add-staff', 'StaffController@store')->name('add-staff');
Route::post('/update-staff/{id}', 'StaffController@update')->name('update-staff');
Route::post('/delete-staff/{id}', 'StaffController@destroy')->name('delete-staff');

Route::get('/partners', 'PartnerController@index')->name('partners');
Route::post('/add-partner', 'PartnerController@store')->name('add-partner');
Route::post('/update-partner/{id}', 'PartnerController@update')->name('update-partner');
Route::post('/delete-partner/{id}', 'PartnerController@destroy')->name('delete-partner');

Route::get('/fees', 'FeeController@index')->name('fees');
Route::get('/engineering', 'FeeController@engineering')->name('engineering');
Route::get('/ict', 'FeeController@ict')->name('ict');
Route::get('/hospitality', 'FeeController@hospitality')->name('hospitality');
Route::get('/journalism', 'FeeController@journalism')->name('journalism');
Route::get('/business', 'FeeController@business')->name('business');
Route::get('/icdl', 'FeeController@icdl')->name('icdl');
Route::get('/catering', 'FeeController@catering')->name('catering');
Route::get('/sports', 'FeeController@sports')->name('sports');
Route::get('/languages', 'FeeController@languages')->name('languages');

Route::post('/add-fee', 'FeeController@store')->name('add-fee');
Route::post('/delete-fee/{id}', 'FeeController@destroy')->name('delete-fee');
Route::post('/update-fee/{id}', 'FeeController@update')->name('update-fee');

Route::get('/courses/{id}', 'SchoolController@show')->name('courses');
Route::post('/add-course/{id}', 'CourseController@store')->name('add-course');
Route::post('/update-course/{id}', 'CourseController@update')->name('update-course');
Route::post('/delete-course/{id}', 'CourseController@destroy')->name('delete-course');

Route::get('/notices', 'NoticeController@index')->name('notices');
Route::post('/add-notice', 'NoticeController@store')->name('add-notice');

Route::get('/messages', 'MessageController@index')->name('messages');
Route::post('/delete-message/{id}', 'MessageController@destroy')->name('delete-message');

Route::get('/info', 'InfoController@index')->name('info');
Route::get('/add-info', 'InfoController@create')->name('add-info');
Route::post('/save-info', 'InfoController@store')->name('save-info');
Route::get('/edit-info/{id}', 'InfoController@edit')->name('edit-info');
Route::post('/update-info/{id}', 'InfoController@update')->name('update-info');
Route::post('/delete-info/{id}', 'InfoController@destroy')->name('delete-info');


