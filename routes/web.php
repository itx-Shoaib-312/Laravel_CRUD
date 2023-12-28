<?php

use App\Http\Controllers\UserController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('form', [UserController::class, 'index'])->name('Form');
Route::post('create', [UserController::class, 'create'])->name('Create');
Route::get('Data', [UserController::class, 'Read'])->name('Read');
Route::delete('/users/{id}', [UserController::class, 'delete'])->name('user.delete');
Route::get('/users/{id}/edit', [UserController::class, 'update'])->name('user.edit');
Route::post('/users/{id}', [UserController::class, 'UserUpdate'])->name('User.Update');

