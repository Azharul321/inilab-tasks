<?php

use App\Http\Controllers\TodoController;
use App\Models\Todo;
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
    $list = Todo::all();
    return view('welcome',compact('list'));
})->name('home');

        Route::get('/create-todo',[TodoController::class, 'TodoCreate'])->name('createTodo');
        Route::get('/edit-todo-page/{id}',[TodoController::class, 'Todoedit'])->name('TodoEditPage');
        Route::get('/upadate-todo',[TodoController::class, 'TodoUpdate'])->name('todoUpdate');
        Route::get('/delete-todo/{id}',[TodoController::class, 'todoDelete'])->name('deleteTodo');
       