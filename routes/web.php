<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerbaikanController;

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

Route::get('/', function () {
    return view('tamplate.welcome');
});

Route::get('/home2', function () {
    return view('index');
});


//crud
// Route::get('blog', 'BlogController@index');

//uts
Route::get('/pertanyaan', [PerbaikanController::class, 'index'])->name('pertanyaan.index');
Route::get('/pertanyaan/add', [PerbaikanController::class, 'add'])->name('pertanyaan.add');
Route::post('/pertanyaan/simpan', [PerbaikanController::class, 'simpan'])->name('pertanyaan.simpan');
Route::get('/pertanyaan/{id}/edit', [PerbaikanController::class, 'edit'])->name('pertanyaan.edit');

Route::put('/pertanyaan/{id}/update', [PerbaikanController::class, 'update'])->name('pertanyaan.update');

Route::get('/pertanyaan/{id}/delete', [PerbaikanController::class, 'delete'])->name('pertanyaan.delete');
