<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

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

/**
 *  ::class prints the FQCN, which is       App\Http\Controllers\MovieController
 * 
 * INDEX: list resources :check:
 */
Route::get('/movies', [MovieController::class, 'index']);


/**
 * 
 *  SHOW: single resource :check:
 */ 
Route::get('/Movies/{movie}', [MoiveController::class, 'show']);


/**
 * 
 *  STORE: create a new resource
 */ 
Route::post('/movies', [MovieController::class, 'store']);

/**
 * 
 *  UPDATE: updating a resource
 */ 
Route::patch('/movies/{movie}', [MovieController::class, 'update']);

/**
 * 
 * DESTROY: deleting / destroying a resource
 */ 
Route::delete('/movies/{movie}', [MovieController::class, 'destroy']);