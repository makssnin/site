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
    return view('main');
})->name('main');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/work', function () {
    return view('work');
})->name('work');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::post('/contacts/submit', 'ContactController@submit')->name('contact-form');


Route::get('/contacts/all', 'ContactController@allData')->name('contact-data');
Route::get('/contacts/all/{id}', 'ContactController@ShowMoreData')->name('contact-data-More');
Route::get('/contacts/all/{id}/update', 'ContactController@DataUpdate')->name('contact-data-update');

Route::post('/contacts/all/{id}/saved', 'ContactController@UpdateSaved')->name('contact-form-update-saved');
Route::get('/contacts/all/{id}/deleted', 'ContactController@Deleted')->name('contact-data-deleted');

Route::post('/about/submit', 'ImgController@ImgSubmit')->name('img-form');



Route::middleware("auth")->group(function (){
    Route::get('/logout', 'AuthController@Logout')->name('logout');

});

Route::middleware("guest")->group(function (){
    Route::get('/registration', 'AuthController@registration')->name('registration');
    Route::post('/registration/submit', 'AuthController@RegistrationSubmit')->name('RegistrationSubmit');

    Route::get('/login', 'AuthController@LoginForm')->name('login');
    Route::post('/login/submit', 'AuthController@LoginSubmit')->name('loginSubmit');
});

