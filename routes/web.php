<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
// use App\Http\Controllers\PostController;
use App\Http\Controllers\PagesController;

Route::get('/', [App\Http\Controllers\PostController::class, 'index']);
Route::get('/stripe', [PostController::class, 'stripe']);
Route::resource('Todo', 'App\Http\Controllers\PostController');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/sendmail', 'App\Http\Controllers\SendEmailController@index');
Route::post('/sendmail/send', 'App\Http\Controllers\SendEmailController@send');


Route::get('/chat', [App\Http\Controllers\ChatController::class, 'index']);
Route::get('chat/messages/{id}', [App\Http\Controllers\ChatController::class, 'getMessage'])->name('message');
Route::post('chat', [App\Http\Controllers\ChatController::class, 'sendMessage']);

Route::get('/map', function(){
    return view('map');
});

Route::get('/stripe', function(){
    return view('stripe');
});

Route::post ( '/', function (Request $request) {
	\Stripe\Stripe::setApiKey ( 'sk_test_51HSPrFLziRvupvbzCh3WhVmtv6GljgLnA4yw21trViE2FBxnvecJ7m5TY3eO0UcAYizx6fgXVhEVzSbILRZZXyIS00DIjjs60m');
	try {
		\Stripe\Charge::create ( array (
				"amount" => 300 * 100,
				"currency" => "usd",
				"source" => $request->input('stripeToken'),
				"description" => "Test payment." 
		) );
		Session::flash ( 'success-message', 'Payment done successfully !' );
		return Redirect::back ();
	} catch ( \Exception $e ) {
		Session::flash ( 'fail-message', "Error! Please Try again." );
		return Redirect::back ();
	}
} );