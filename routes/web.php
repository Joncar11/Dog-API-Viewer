<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController; // Move this line to the top

Route::get('/', [DogController::class, 'index']); // Home page
Route::get('/random', [DogController::class, 'randomDog']); // Random dog image
Route::get('/breeds', [DogController::class, 'listBreeds']); // List of breeds
Route::get('/breed/{id}', [DogController::class, 'randomDogByBreed']); // Random dog by breed


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

Route::get('/', function () {
    return view('welcome');


});
