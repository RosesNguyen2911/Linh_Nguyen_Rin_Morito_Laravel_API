<?php

use Illuminate\Http\Request;
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
