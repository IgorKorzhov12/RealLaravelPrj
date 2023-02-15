<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return view('firstPage');
})->name('firstPage'); */

Route::resource('book', BookController::class)->except(['index'])->middleware('auth');


Route::get('/', [BookController::class, 'index'])->name('book.index');
