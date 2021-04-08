<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;

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


Route::get('/', [FirstController::class, 'index']);
Route::get('/home', [FirstController::class, 'index']);
Route::get('/index', [FirstController::class, 'index']);
Route::get('/contact', [FirstController::class, 'contact']);
Route::get('/game', [FirstController::class, 'game']);
Route::get('/jeu', [FirstController::class, 'game']);
Route::get('/calendrier', [FirstController::class, 'calendrier']);
Route::get('/creer', [FirstController::class, 'creer']);
Route::get('/creer/{id}', [FirstController::class, 'diy']);
Route::get('/profil/{id}', [FirstController::class, 'profil']);
Route::get('/game/{id}', [FirstController::class, 'video'])->where('id','[0-9]+');
Route::get('/next-step', [FirstController::class, 'nextStep']);
Route::get('/nextStory', [FirstController::class, 'nextStory']);
Route::get('/game/quizz/{id}', [FirstController::class, 'quizz']);

Auth::routes();
