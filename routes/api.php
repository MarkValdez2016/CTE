<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::group(['middleware'=>['auth:sanctum']]), function () {
    
// });

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Auth Register

Route::post('/register', '\App\Http\Controllers\UserController@register');


//Profile

Route::post('/profile', '\App\Http\Controllers\ProfileController@store');

Route::get('/profile/show/{id}', '\App\Http\Controllers\ProfileController@show');

Route::post('/profile/update/{id}', '\App\Http\Controllers\ProfileController@update');

Route::delete('/profile/destroy/{id}','\App\Http\Controllers\ProfileController@destroy');

//Employment

Route::post('/employment','\App\Http\Controllers\EmploymentController@store');

Route::get('/employment/show/{id}', '\App\Http\Controllers\EmploymentController@show');

Route::post('/employment/update/{id}', '\App\Http\Controllers\EmploymentController@update');

Route::delete('/employment/destroy/{id}','\App\Http\Controllers\EmploymentController@destroy');

//Edu background

Route::post('/educationalbg','\App\Http\Controllers\EducationalBGController@store');

Route::get('/educationalbg/show/{id}', '\App\Http\Controllers\EducationalBGController@show');

Route::post('/educationalbg/update/{id}', '\App\Http\Controllers\EducationalBGController@update');

Route::delete('/educationalbg/destroy/{id}','\App\Http\Controllers\EducationalBGController@destroy');

//Announcement 

Route::post('/announcement','\App\Http\Controllers\AnnouncementController@store');

Route::get('/announcement/show/{id}', '\App\Http\Controllers\AnnouncementController@show');

Route::post('/announcement/update/{id}', '\App\Http\Controllers\AnnouncementController@update');

Route::delete('/announcement/destroy/{id}','\App\Http\Controllers\AnnouncementController@destroy');



