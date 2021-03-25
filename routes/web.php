<?php

use Illuminate\Support\Facades\Route;
use App\Helpers\CorpsSeeder;

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
    return view('welcome');
});

/** Cache */
Route::get('/clear-cache', function() {
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

/** SEED DB */
Route::get('/seed-db', function() {
    CorpsSeeder::corps();
    return "Database seeded successfully";
});

//GUESTS ONLY
Route::group(['middleware' => 'guest'],function () {

    Route::get('login', 'LoginController@login')->name('login');
    Route::post('user/register', 'LoginController@register')->name('register_user');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Logged Users Only

Route::group(['middleware' => 'auth'],function () {

    //CORP MEMBERS
    Route::get('corper_dashboard',      'CitizenController@corperDashboard')->name('corper_dashboard');
    Route::post('corper_logout',      'CitizenController@logout')->name('corper_logout');
    Route::post('register_citizen',     'CitizenController@register_citizen')->name('register_citizen');
    Route::get('user_reports',          'CitizenController@user_reports')->name('user_reports');
});
