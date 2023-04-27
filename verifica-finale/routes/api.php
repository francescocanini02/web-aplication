<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\EditorController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//http://localhost:8000/api




//POST http://localhost:8000/api/books
Route::post('/books', [ReviewController::class, 'create']);
//DELETE http://localhost:8000/api/books/7
Route::delete('/books/{book}', [ReviewController::class, 'delete']);
//GET http://localhost:8000/api/books/3
Route::get('/books/{book}', [ReviewController::class, 'read']);
//GET http://localhost:8000/api/books
Route::get('/books', [ReviewController::class, 'readAll']);
//PUT http://localhost:8000/api/books/22
Route::put('/books/{book}', [ReviewController::class, 'update']);

//POST http://localhost:8000/api/editors
Route::post('/editors', [ReviewController::class, 'create']);
//DELETE http://localhost:8000/api/editors/7
Route::delete('/editors/{editor}', [ReviewController::class, 'delete']);
//GET http://localhost:8000/api/editors/3
Route::get('/editors/{editor}', [ReviewController::class, 'read']);
//GET http://localhost:8000/api/editors
Route::get('/editors', [ReviewController::class, 'readAll']);
//PUT http://localhost:8000/api/editors/22
Route::put('/editors/{editor}', [ReviewController::class, 'update']);

//POST http://localhost:8000/api/authors
Route::post('/authors', [ReviewController::class, 'create']);
//DELETE http://localhost:8000/api/authors/7
Route::delete('/authors/{author}', [ReviewController::class, 'delete']);
//GET http://localhost:8000/api/authors/3
Route::get('/authors/{author}', [ReviewController::class, 'read']);
//GET http://localhost:8000/api/authors
Route::get('/authors', [ReviewController::class, 'readAll']);
//PUT http://localhost:8000/api/authors/22
Route::put('/authors/{author}', [ReviewController::class, 'update']);



