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

Route::get('/', function () {
    return view('homepage.index');
});

Route::get('homepage', function () {
    return view('homepage.index');
});
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('balance', 'BalanceController@index');
Route::post('balance', 'BalanceController@store');
Route::post('updatebalance', 'BalanceController@update');
Route::post('deletebalance', 'BalanceController@destroy');

Route::get('savings', 'SavingsController@index');
Route::post('getsavings', 'SavingsController@index2');
Route::post('savings', 'SavingsController@store');

Route::get('executives', 'ExecutivesController@index');

// Route::get('savings', 'MembersController@index4');
// Route::get('addsavings', 'SavingsController@index');
// Route::get('updatebalance', 'SavingsController@index');
// Route::get('savingsTable', 'SavingsController@index');

Route::get('about', 'MembersController@index');
Route::get('change-admin-info', 'MembersController@index2');
Route::get('home', 'MembersController@index3');
Route::get('change-password', function () {
    return view('change-password/index');
});
Route::get('create-account', function () {
    return view('create-account/index');
});
Route::get('loanbond', function () {
    return view('loanbond/index');
});
Route::get('instalment', function () {
    return view('instalment/index');
});
Route::get('board', function () {
    return view('board/index');
});
Route::get('profile', function () {
    return view('profile/index');
});
Route::get('all-members', 'ExecutivesController@index');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
