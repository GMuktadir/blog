<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//check api 
Route::get('healthcheck',function(){
    return response()->json([
        'status' => 'success',
        'message'=>'API is Running',
        'data'=>[],
        'error'=>[]
    ]);
});
//when no route found | fallback function
Route::fallback(function(){
    return response()->json([
        'status' => 'error',
        'message'=>'API Endpoint not found (NO Route Found)',
    ]);
});

Route::prefix('auth')->group(function () {
    
    });
