<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OfferController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
        return view('index');

});
Route::get('/sale', function () {
        return view('sale');

});

Route::get('/admin', function () {
    return view('admin');
});
Route::get('/purchase', function () {
    return view('purchase');
});
Route::get('/rent', function () {
    return view('rent');
});
Route::get('/allEstateAdmin', function () {
    if(session()->has('login')){
        return view('allEstate');
    }else{
        return redirect('/');
    }
});
Route::get('/adminPanel', function () {
    if(session()->has('login')){
        return view('adminpanel');
    }else{
        return redirect('/');
    }
});

Route::post('/admin',[AdminController::class,"login"]);
Route::post('/newOffer',[OfferController::class,"newOffer"]);
Route::get('/adminLogout',[AdminController::class,"logout"]);