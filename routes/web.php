<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;

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

// Route::get('/', function () {
//     return view('form');
// });
Route::get('/form',[formController::class,'register']);
Route::post('/form',[formController::class,'data']);
Route::get('/std/view',[formController::class,'std_view']);
Route::get('/std/dlt/{id}',[formController::class,'std_dlt']);