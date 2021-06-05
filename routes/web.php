<?php

use App\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Web\v1\AktsController;



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



// Auth::routes();

// locale Route

Route::middleware(['auth'])->group(function () {

  Route::get('lang/{locale}',[LanguageController::class,'swap']);

// Route url
  Route::get('/', 'DashboardController@dashboardAnalytics');

// Route Dashboards
  Route::get('/dashboard-analytics', 'DashboardController@dashboardAnalytics');

// Route Components
  Route::get('/sk-layout-2-columns', 'StaterkitController@columns_2');
  Route::get('/sk-layout-fixed-navbar', 'StaterkitController@fixed_navbar');
  Route::get('/sk-layout-floating-navbar', 'StaterkitController@floating_navbar');
  Route::get('/sk-layout-fixed', 'StaterkitController@fixed_layout');

// acess controller
  Route::get('/access-control', 'AccessController@index');
  Route::get('/access-control/{roles}', 'AccessController@roles');
  Route::get('/modern-admin', 'AccessController@home')->middleware('permissions:approve-post');

  Route::resources([
    'menu' => 'Web\MenusController',
    'page' => 'Web\PagesController',
    'product' => 'Web\ProductsController',
    'partner' => 'Web\PartnersController',
    'advantage' => 'Web\AdvantagesController',
  ]);
});


Route::post('/media-upload', [MediaController::class, 'upload']);
Route::post('/media-delete', [MediaController::class, 'delete']);

//Auth routes
Auth::routes();
//Route::post('login', [AuthController::class, 'login']);
//Route::post('register', [AuthController::class, 'register']);
//Route::post('logout', [AuthController::class, 'logout']);

// Route for admin permissions




