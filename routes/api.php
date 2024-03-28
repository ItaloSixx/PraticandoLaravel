<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\UserController;


//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  //  return $request->user();
//});

route::get('/users', [UserController::class, 'index']);
