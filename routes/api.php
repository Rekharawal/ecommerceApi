<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/products','ProductController');

Route::group(['prefix'=>'/products'],function(){
	Route::apiResource('/reviews','ReviewController');
});
