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
Route::get('/greetings', 'GreetingController@greetings')->name('greetings');
Route::get('/principal-message', 'AboutController@principal')->name('principal');

//Route::get('/greetings', 'OverviewController@greetings')->name('greetings');


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

Route::get('/contact-us', 'MessageController@contact')->name('contact');
Route::post('/save-message', 'MessageController@store')->name('save-message');

Route::get('/our-alumni', 'AlumniController@alumnis')->name('our-alumnis');

Route::get('/view-notice/{id}', 'NoticeController@show')->name('view-notice');


//Route::get('/past-papers', 'PaperController@papers')->name('past-papers');
//Route::get('/course-papers/{id}', 'PaperController@coursepapers')->name('course-papers');


Route::get('/mei-info', 'StatementController@meiinfo')->name('mei-info');

//Quick Links
Route::get('/term-dates', 'QuickController@termdates')->name('term-dates');
Route::get('/timetable', 'QuickController@timetable')->name('timetable');


Route::post('/past-papers', 'StudentController@store')->name('past-papers');
Route::get('/papers/{id}', 'PastPaperController@papers')->name('papers');



//Admin
Route::get('/admin', 'AdminController@index')->name('dashboard');

Route::get('/mei-greetings', 'GreetingController@index')->name('overview');
Route::get('/add-overview', 'OverviewController@create')->name('add-overview');
Route::post('/save-overview', 'GreetingController@store')->name('save-overview');
Route::get('/edit-overview/{id}', 'GreetingController@edit')->name('edit-overview');
Route::post('/update-overview/{id}', 'GreetingController@update')->name('update-overview');
Route::post('/delete-overview/{id}', 'GreetingController@destroy')->name('delete-overview');

Route::get('/posts', 'BlogController@index')->name('posts');
Route::get('/view-post/{id}', 'BlogController@view')->name('view-post');
Route::get('/add-post', 'BlogController@create')->name('add-post');
Route::post('/save-post', 'BlogController@store')->name('save-post');
Route::get('/edit-post/{id}', 'BlogController@edit')->name('edit-post');
Route::post('/update-post/{id}', 'BlogController@update')->name('update-post');
Route::post('/delete-post/{id}', 'BlogController@destroy')->name('delete-post');

Route::get('/notices', 'NoticeController@index')->name('our-notices');
//Route::get('/view-notice/{id}', 'NoticeController@view')->name('view-notice');

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

Route::get('/info', 'StatementController@index')->name('info');
//Route::get('/add-info', 'StatementController@create')->name('add-info');
Route::post('/save-info', 'StatementController@store')->name('save-info');
//Route::get('/edit-info/{id}', 'StatementController@edit')->name('edit-info');
Route::post('/update-info/{id}', 'StatementController@update')->name('update-info');
Route::post('/delete-info/{id}', 'StatementController@destroy')->name('delete-info');

Route::get('/alumnis', 'AlumniController@index')->name('alumnis');
Route::get('/add-alumnus', 'AlumniController@create')->name('add-alumnus');
Route::post('/save-alumnus', 'AlumniController@store')->name('save-alumnus');
Route::get('/edit-alumnus/{id}', 'AlumniController@edit')->name('edit-alumnus');
Route::post('/update-alumnus/{id}', 'AlumniController@update')->name('update-alumnus');
Route::post('/delete-alumnus/{id}', 'AlumniController@destroy')->name('delete-alumnus');


//Quick Links
Route::get('/our-schedule', 'QuickController@index')->name('our-schedule');
Route::post('/add-schedule', 'QuickController@store')->name('add-schedule');

Route::get('/our-timetable', 'QuickController@ourtimetable')->name('our-timetable');
Route::post('/add-timetable', 'QuickController@savetable')->name('add-timetable');

Route::get('/tags', 'TagController@index')->name('tags');
Route::post('/save-tag', 'TagController@store')->name('save-tag');
Route::post('/update-tag/{id}', 'TagController@update')->name('update-tag');
Route::post('/delete-tag/{id}', 'TagController@destroy')->name('delete-tag');


//KCSE Students
Route::get('kcse-students', 'StudentController@index')->name('kcse-students');
Route::post('delete-student/{id}', 'StudentController@destroy')->name('delete-student');


//KCSE Papers
Route::get('kcse-papers', 'PastPaperController@index')->name('kcse-papers');
Route::post('add-paper/{id}', 'PastPaperController@store')->name('add-paper');
Route::post('update-paper/{id}', 'PastPaperController@update')->name('update-paper');
Route::post('delete-paper/{id}', 'PastPaperController@destroy')->name('delete-paper');


//Subjects
Route::post('add-subject', 'SubjectController@store')->name('add-subject');
Route::post('update-subject/{id}', 'SubjectController@update')->name('update-subject');
Route::post('delete-subject/{id}', 'SubjectController@destroy')->name('delete-subject');

Route::get('subject_papers/{id}', 'PastPaperController@subject_papers')->name('subject_papers');


Auth::routes();

