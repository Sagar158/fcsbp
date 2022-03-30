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

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>'auth','prefix'=>'/'],function()
{
    /*Dashboard Routes*/
    Route::group(['prefix' => 'dashboard','namespace'=>'Dashboard'],function(){
        Route::get('/', 'DashboardController@index')->name('dashboard');
    });

    /*Users Routes*/
    Route::group(['prefix' => 'users','namespace'=>'Users'],function(){

        Route::get('/', 'UsersController@index')->name('users')->middleware('viewUser');
        Route::get('/create', 'UsersController@create')->name('users.create')->middleware('createUser');
        Route::post('/store', 'UsersController@store')->name('users.store')->middleware('createUser');
        Route::get('/edit', 'UsersController@edit')->name('users.edit')->middleware('editUser');
        Route::match(['PUT','PATCH'],'/update', 'UsersController@update')->name('users.update')->middleware('editUser');
        Route::get('/destroy', 'UsersController@destroy')->name('users.destroy')->middleware('deleteUser');
        Route::get('/show', 'UsersController@show')->name('users.show')->middleware('viewUser');
        Route::get('/showUsers', 'UsersController@showUsers')->name('users.showUsers')->middleware('viewUser');

        /*Roles Routes*/
        Route::group(['prefix' => 'roles','namespace'=>'Roles'],function(){
            Route::get('/edit', 'RolesController@edit')->name('users.roles.edit');
            Route::post('/update', 'RolesController@update')->name('users.roles.update');
        });

    });

    // End Users Routes
    Route::group(['prefix' => 'endusers', 'namespace' => 'EndUsers'],function(){
        Route::get('/','EndUsersController@index')->name('endusers')->middleware('viewEndUser');
        Route::get('create','EndUsersController@create')->name('endusers.create')->middleware('createEndUser');
        Route::post('store','EndUsersController@store')->name('endusers.store')->middleware('createEndUser');
        Route::get('edit','EndUsersController@edit')->name('endusers.edit')->middleware('editEndUser');
        Route::put('update','EndUsersController@update')->name('endusers.update')->middleware('editEndUser');
        Route::get('destroy','EndUsersController@destroy')->name('endusers.destroy')->middleware('deleteEndUser');
        Route::get('showUsers','EndUsersController@showUsers')->name('endusers.showUsers')->middleware('viewEndUser');

    });


    //User Types
    Route::group(['prefix' => 'usertypes', 'namespace' => 'UserTypes'],function(){
        Route::get('/','UserTypesController@index')->name('usertypes');
        Route::get('showUserType','UserTypesController@showUserType')->name('usertypes.showUserType');
        Route::get('roles','UserTypesController@roles')->name('usertypes.roles');
        Route::post('roles/update','UserTypesController@update')->name('usertypes.roles.update');

    });

    /*Events Controller*/
    Route::group(['prefix' => 'events','namespace'=>'Events'],function(){
        Route::get('/', 'EventsController@index')->name('event')->middleware('viewEvent');
        Route::get('/create', 'EventsController@create')->name('event.create')->middleware('createEvent');
        Route::post('/store', 'EventsController@store')->name('event.store')->middleware('createEvent');
        Route::get('/edit', 'EventsController@edit')->name('event.edit')->middleware('editEvent');
        Route::match(['PUT','PATCH'],'/update', 'EventsController@update')->name('event.update')->middleware('editEvent');
        Route::get('/destroy', 'EventsController@destroy')->name('event.destroy')->middleware('deleteEvent');
        Route::get('/showEvents', 'EventsController@showEvents')->name('event.showEvents')->middleware('viewEvent');
        Route::get('calendar','EventsController@calendar')->name('calendar')->middleware('viewEvent');

    });

});
