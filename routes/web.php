<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\ContactController;
// use App\Models\User;


// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('category/{id}', [HomeController::class, 'categoryName'])->name('home');
Route::get('newsTicker', [HomeController::class, 'newsTicker'])->name('home');
Route::get('singleCategory/{id}', [HomeController::class, 'singleCategory'])->name('home');
Route::get('aboutus', [HomeController::class, 'aboutus'])->name('home');
// Route::get('aboutus', function () {
//     return view('aboutus');
// });
Route::get('contactus',[HomeController::class, 'contactus'])->name('contacts');
Route::post('contactStore', [HomeController::class, 'contactStore'])->name('contact');
Route::get('lineChart', [HomeController::class, 'lineChart']);
Route::get('barChart', [HomeController::class, 'barChart']);
Route::get('chartjs', [HomeController::class, 'chartjs']);
Route::get('shareSocialMedia', [HomeController::class, 'shareSocialMedia']);


Auth::routes();
Route::get('logout', function (){
    Auth::logout();
    return redirect()->route('login');
});

Route::get('/home', [DashboardController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('posts', PostController::class);
    Route::resource('categories', CategoriesController::class);
    Route::resource('about', AboutController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('social', SocialController::class);
    Route::resource('logo', LogoController::class);
    Route::get('index' , [DashboardController::class , 'index']);


});

