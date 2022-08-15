<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('main','MainPageController@index')->name('main');
//Route::get('registration','RegistrationController@index')->name('registration');
//Route::post('registration/submit','ClientController@submit')->name('client-form')->middleware('NewMiddleware');
//Route::get('clients/update','ClientController@updateClientsTable');
//Route::get('clients/get','ClientController@getClients');
Route::get('post/create','MainController@index');
Route::post('postImage/submit','PostController@create')->name('createPostImage');
//Route::post('postContent/submit','PostController@storeContent')->name('createPost');
//Route::post('postLikes/submit','PostController@storeLikes')->name('createPost');
Route::get('project','ProjectController@index');

Route::group(['prefix' => 'posts'],function (){
    Route::get('/','PostController@index');
    Route::post('create','PostController@create')->middleware('PostMiddleware');
    Route::put('update','PostController@update');
    Route::delete('delete','PostController@delete');
});







//Route::get('/cars/create','carController@create')->name('createCar');
//Route::get('/clients/create','clientController@create')->name('createClient');
//Route::get('/cities/create','cityController@create')->name('createCity');
//Route::get('/page/{param?}','PageController@index')->name('page')->where(['param'=>'[A-Za-z]+']);
//
//
//Route::get('/articles/','PageController@getArticles')->name('articles')->where(['param'=>'[A-Za-z]+']);
//Route::get('/article/{page}','PageController@getArticle')->name('article')->middleware(['NewMiddle']);
//Route::resource('/pages','CoreResource');


//Route::group(['prefix' => 'Shop'], function ()
//{
//    Route::get('/page/create','PageController@create');
//    Route::get('/page/edit','PageController@edit');
//});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
