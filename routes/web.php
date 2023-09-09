<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\App;

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

Route::get('/home',[HomeController::class,'index']);
Route::get('/upload',function(){
   return view('upload');
});
// Route::get('/{lang?}',function($lang = null ){

//  App::setlocale($lang);
//  return view('first');
// });

Route::post('/upload',[HomeController::class,'upload']);


Route::get('/calendar', function () {
    return view('calendar');
});
