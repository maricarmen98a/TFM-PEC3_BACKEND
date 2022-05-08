<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasswordResetRequestController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UnregUserController;
use App\Http\Controllers\ReservationController;

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::get('user-profile', 'AuthController@userProfile');
    Route::post('/reset-password-request', [PasswordResetRequestController::class, 'sendPasswordResetEmail']);
    Route::post('/change-password', [ChangePasswordController::class, 'passwordResetProcess']);
});

Route::get('flights', 'FlightController@getFlight');
Route::get('cities', 'FlightController@getCities');
Route::get('countries', 'FlightController@getCountries');
Route::get('bookings', 'FlightController@getBooking');
Route::post('bookings', 'BookingController@store');
Route::get('unreguser', 'UnregUserController@show');
Route::post('unreguser', 'UnregUserController@store');
/* 
Route::apiResource('users','UserController')
    ->only(['index'])
    ->names([
    'index' => 'users.all'
]); */
/*
Route::apiResource('flights','FlightController')
    ->only(['index','show','store','update','destroy'])
    ->names([
    'index' => 'flights.all',
    'show' => 'flights.show',
    'store' => 'flights.store',
    'update' => 'flights.update',
    'destroy' => 'flights.destroy'
]);

 Route::apiResource('booking','BookingController')
    ->only(['index','show','store','update','destroy'])
    ->names([
    'index' => 'booking.all',
    'show' => 'booking.show',
    'store' => 'booking.store',
    'update' => 'booking.update'
]); 

Route::apiResource('reservations','ReservationController')
    ->only(['index','show','store','update','destroy'])
    ->names([
    'index' => 'reservation.all',
    'show' => 'reservation.show',
    'store' => 'reservation.store',
    'update' => 'reservation.update',
    'delete' => 'reservation.destroy'
]);
Route::fallback( function() {
    return response()->json(['error' => 'Invalid Resource Request.'], 404);
})->name('api.404');
*/


/* Route::options('{all}', function () {
    $response = Response::make('');

    if(!empty($_SERVER['HTTP_ORIGIN']) && in_array($_SERVER['HTTP_ORIGIN'], ['http://127.0.0.1:8000'])) {
        $response->header('Access-Control-Allow-Origin', $_SERVER['HTTP_ORIGIN']);
    } else {
        $response->header('Access-Control-Allow-Origin', url()->current());
    }
    $response->header('Access-Control-Allow-Headers', 'Origin, Content-Type, Accept, Authorization');
    $response->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, PATCH, DELETE');
    $response->header('Access-Control-Allow-Credentials', 'true');
    $response->header('X-Content-Type-Options', 'nosniff');

    return $response;
})->where('all', '.*'); */