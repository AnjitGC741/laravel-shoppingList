<?php
use App\Http\Controllers\ShoppingListController;
use App\Models\shoppingList;
use Illuminate\Support\Facades\Route;


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

Route::get('/',[ShoppingListController::class,'index']);
Route::post('/save-todo',[ShoppingListController::class,'saveList'])->name('saveList');
Route::get('delete/{id}',[ShoppingListController::class,'delete']);
Route::get('edit/{id}',[ShoppingListController::class,'edit']);
Route::post('/edit',[ShoppingListController::class,'updateTodo'])->name('updateTodo');
