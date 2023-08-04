<?php


//use App\Http\Controllers\StudentController;

use App\Http\Controllers\StudentController;
//use App\Http\Controllers\TestController;
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

route::get('/index', [StudentController::class, 'index'])->name('students.index');
route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

route::post('students/store', [StudentController::class, 'create'])->name('students.store');

Route::get('students/{id}/edit', [StudentController::class, 'edit']);
Route::get('students/{id}/delete', [StudentController::class, 'destroy']);



//Route::post('/', [TestController::class, 'test']);
