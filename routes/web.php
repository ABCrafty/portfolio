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

// homepage
Route::get('/', 'HomeController@index')->name('home');

// projects
Route::get('projets', 'ProjectsController@index')->name('front.projects.index');
Route::get('projets/{project}', 'ProjectsController@show')->name('front.projects.show');

// blog
Route::get('blog', 'PostsController@index')->name('front.posts.index');
Route::get('blog/{post}', 'PostsController@show')->name('front.posts.show');

// about
Route::get('a-propos', 'AboutController@index')->name('front.about.index');



// Authentification
Route::get('/register', 'Auth\RegisterController@create')->name('register.create');
Route::get('/login', 'Auth\LoginController@create')->name('login');
Route::get('/logout', 'Auth\LoginController@destroy')->name('logout');
Route::get('/password-request', 'Auth\LoginController@lostPassword')->name('password.request');

Route::post('/register', 'Auth\RegisterController@store')->name('register.store');
Route::post('/login', 'Auth\LoginController@store')->name('login.store');

// zone admin
Route::group(['prefix' => 'admin',  'middleware' => ['role:admin']], function()
{
    Route::get('/', 'Admin\DashboardController@index')->name('dashboard.index');

    // route page d'accueil
    Route::resource('homepage', 'Admin\HomeController');

    // users, profile
    Route::resource('users', 'Admin\UsersController');

    // projects
    Route::resource('projects', 'Admin\ProjectsController');

    Route::resource('blog', 'Admin\PostsController');

    Route::resource('about', 'Admin\AboutController');
    // roles
    Route::resource('roles', 'RolesController');

    Route::resource('permissions', 'PermissionsController');

    Route::any('user-data', 'Admin\UsersController@ajaxListing')->name('datatables.data');
    Route::any('project-data', 'Admin\ProjectsController@ajaxListing')->name('datatables.projectData');
});



