<?php
use App\Models\Event;
use App\Models\User;

use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\EventController;
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
    return view('welcome');
});

/* Front page routes */
Route::get('/frontpage', 'EventController@index')->name('events.index');
Route::get('/frontpage/{slug}', 'EventController@show' )->name('events.show');
Route::get('/search', 'EventController@search' )->name('events.search');

/* Booking Routes only accessed after login*/ 

Route::group(['middleware' =>['auth']], function(){

    Route::get('/booking', 'BookingController@index')->name('booking.index');
    Route::post('/booking/add', 'BookingController@store')->name('booking.store');
    
    Route::delete('/booking/{rowid}', 'BookingController@destroy')->name('booking.destroy');
    
    // Route::get('/emptybooking', function (){ Cart::destroy();
    // }

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



