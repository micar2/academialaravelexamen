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


Route::get('/home', 'WelcomeController@index')->name('welcome');

//Route::get('student.register', 'WelcomeController@register')->name('student.register');
//
//Route::get('student.create', 'WelcomeController@create')->name('student.create');
//
//Route::get('student.login', 'WelcomeController@login')->name('student.login');
//Route::post('student.intro', 'WelcomeController@intro')->name('student.intro');
//
//Route::get('student.store', 'WelcomeController@store')->name('student.store');
//
//Route::post('student.logout', 'Auth\LoginController@logout')->name('student.logout');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('login', 'Auth\LoginController@login');

Auth::routes();

//Route::group(['prefix'=>'admin/',
//    'middleware'=>'auth'],
//    function (){

        Route::get('/', 'HomeController@index');

        Route::resource('posts', 'PostsController');

        Route::resource('subjects', 'CategoriesController');

        Route::resource('lessons', 'LessonsController');

        Route::resource('subjects', 'SubjectController');

        Route::resource('comentaries', 'ComentaryController');

        Route::resource('documents', 'DocumentController');

        Route::resource('enrolments', 'EnrolmentController');
//    });
Route::get('subjects/{subject}', 'SubjectController@index')->name('subjects.index');

Route::group(['prefix'=>'normal/'],
    function () {

        Route::get('blogs', 'BlogsController@index')->name('blog');

        Route::get('blogs/{id}', 'BlogsController@menu')->name('blog.menu');

        Route::get('post/detail/{id}', 'PostsController@detail')->name('post.detail');

        Route::get('post/create/{category_id}', 'PostsController@createNormal')->name('create.post');

        Route::post('post/create/store', 'PostsController@storeNormal')->name('store.post');

        Route::get('post/detail/comentary/{id}', 'ComentaryController@createNormal')->name('create.comentary');

        Route::post('post/detail/comentary/store', 'ComentaryController@storeNormal')->name('store.comentary');

        Route::get('subjects/show', 'SubjectController@showNormal')->name('show.subjects');

        Route::get('subjects/detail/{subject}', 'SubjectController@detailNormal')->name('detail.subject');

        Route::get('subjects/detail/create/enrolments/{subject}', 'EnrolmentController@createNormal')->name('create.enrolment');

        Route::post('subjects/detail/create/enrolments', 'EnrolmentController@storeNormal')->name('store.enrolment');

        Route::get('subjects/students', 'SubjectController@showStudent')->name('student.subjects');

    });