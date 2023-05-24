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

// Route::get('/results', function () {
//     return view('results');
// });


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
 
    // Your overwrites here
    // Route::post('login', ['uses' => 'MyAuthController@postLogin', 'as' => 'postlogin']);
 });


Route::get('/', [App\Http\Controllers\TheFinderContloller::class, 'combination_fetch'])->name('combination_fetch');

Route::post('/results', [App\Http\Controllers\TheFinderContloller::class, 'find_courses'])->name('find_courses');

Route::get('/by-location', [App\Http\Controllers\TheFinderContloller::class, 'locations_fetch'])->name('locations_fetch');

Route::post('/results2', [App\Http\Controllers\TheFinderContloller::class, 'find_courses_by_location'])->name('find_courses_by_location');

Route::get('/by-jobs', [App\Http\Controllers\TheFinderContloller::class, 'jobs_fetch'])->name('jobs_fetch');

Route::post('/results3', [App\Http\Controllers\TheFinderContloller::class, 'find_courses_by_job'])->name('find_courses_by_job');

Route::get('/by-interest', [App\Http\Controllers\TheFinderContloller::class, 'interests_fetch'])->name('interests_fetch');

Route::post('/results4', [App\Http\Controllers\TheFinderContloller::class, 'find_courses_by_interest'])->name('find_courses_by_interest');
