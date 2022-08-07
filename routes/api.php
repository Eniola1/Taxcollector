<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("login",[Login::class,'index']);

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::get("building",[Login::class,'bldng_typ']);
    Route::get("classifications",[Login::class,'class']);
    Route::get("billingcode",[Login::class,'bldng_code']); 
    Route::get("use",[Login::class,'U_data']);
    Route::get("ward",[Login::class,'ward']);
    Route::get("taxpayers",[Login::class,'taxpayers']);
    Route::get("taxpayers/{id}",[Login::class,'s_taxpayers']);
    Route::post("search",[Login::class,'search']);
    Route::post("street",[Login::class,'street']);
    Route::post("logout",[Login::class,'logout']);
    Route::post("createTaxpayers",[Login::class,'createTaxpayers']);
    Route::post("createStreets",[Login::class,'createStreets']);
});

//Route::get("building",[Login::class,'bldng_typ']);