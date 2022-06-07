<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/mainMenu', [InvController::class, 'Home'])->name('home');

Route::get('/PlayerInv', [InvController::class, 'Inventory'])->name('inv');
Route::prefix('PlayerInv')->group(function (){
    Route::get('/add', [InvController::class, 'AddInv'])->name('inv.add');
    Route::get('/{id}/edit', [InvController::class, 'EditInv'])->name('inv.edit');
    Route::patch('/{id}/update',[InvController::class, 'UpdateInv'])->name('inv.update');
    Route::delete('/{id}/delete',[InvController::class, 'DeleteItem'])->name('inv.delete');
    Route::post('/create', [InvController::class, 'CreateInv'])->name('inv.create');
});
