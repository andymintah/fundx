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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/campaign/mshow/{campaign}', 'CampaignController@mshow');
Route::get('/campaign/withdraw/', 'CampaignController@withdraw');

Route::get('/campaign/mindex', 'CampaignController@mindex');

Route::get('/donation/mindex', 'DonationController@mindex');

Route::resource('campaign','CampaignController');
Route::resource('campaignacc','CampaignAccountController');
Route::resource('profile','UserProfileController');
Route::resource('donation','DonationController');

Route::resource('donors','DonorsController');
Route::resource('donationdonors','DonationDonorController');

Route::resource('users','UsersController');

Route::get('/donors/create/{id}', 'DonorsController@create');
Route::get('/donationdonors/create/{id}', 'DonationDonorController@create');

Route::get('/profile/cmindex/', 'UserProfileController@cmindex');
Route::get('/profile/dnindex/', 'UserProfileController@dnindex');
