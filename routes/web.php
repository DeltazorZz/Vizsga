<?php

use App\Http\Controllers\TesztController;
use Illuminate\Support\Facades\Route;

Route::get('/tesztek',[TesztController::class,'index']);
Route::get('/tesztek/kategoria',[TesztController::class,'tesztkateg']);
Route::get('/kategoria',[TesztController::class,'index']);


Route::get('/', function () {
    return view('index');
});
