	<?php

use App\Http\Controllers\EstateController;
use App\Http\Controllers\OfferController;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/estates',[EstateController::class,'getAllEstates']);
Route::post('/estateSort',[EstateController::class,'GetEstatesSort']);
Route::post('/purchaseEstateSort',[EstateController::class,'GetPurchaseEstatesSort']);
Route::post('/rentEstateSort',[EstateController::class,'GetRentEstatesSort']);
Route::get('/purchaseEstates',[EstateController::class,'getPurchaseEstates']);
Route::get('/rentEstates',[EstateController::class,'getRentEstates']);
Route::get('/estate/{estate}',[EstateController::class,'getEstate']);
Route::post('/estate',[EstateController::class,'createEstate']);
Route::delete('/estate/{estate}',[EstateController::class,'destroyEstate']);


Route::get('/offers',[OfferController::class,'getAllOffer']);
Route::post('/offer/{offer}',[OfferController::class,'createOffer']);
Route::delete('/offer/{offer}/{delete}',[OfferController::class,'destroyOffer']);

