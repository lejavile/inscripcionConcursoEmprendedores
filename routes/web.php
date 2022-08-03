<?php

use Illuminate\Support\Facades\Route;
use App\Models\entrepreneurshipEconomicactivity;

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
    $category=entrepreneurshipEconomicactivity::all()->pluck('name','id');
    // dd($category);
    return view('welcome', compact('category'));
});

Route::resource('inscripcionConcurso','inscripcionConcursoController');
