<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NIDInfoController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::post('/add',[NIDInfoController::class,'create'])->name('add-nid');
Route::get('/',[NIDInfoController::class,'list'])->name('nid-list');
Route::get('/add-page',[NIDInfoController::class,'addPage'])->name('add-page');
Route::get('/edit-nid/{id}',[NIDInfoController::class,'edit'])->name('edit-nid');
Route::post('/edit-nid',[NIDInfoController::class,'update'])->name('update-nid');
Route::post('/delete-nid/{id}',[NIDInfoController::class,'delete'])->name('delete-nid');
Route::post('/update-nid/{id}',[NIDInfoController::class,'update'])->name('update-nid');
