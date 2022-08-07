<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/taxpayers', function () {
    return view('taxpayers');
})->name('taxpayers');

Route::middleware(['auth:sanctum', 'verified'])->get('/zones', function () {
    return view('zones');
})->name('zones');

Route::middleware(['auth:sanctum', 'verified'])->get('/wards', function () {
    return view('wards');
})->name('wards');

Route::middleware(['auth:sanctum', 'verified'])->get('/towns', function () {
    return view('towns');
})->name('towns');

Route::middleware(['auth:sanctum', 'verified'])->get('/bills', function () {
    return view('bills');
})->name('bills');

Route::middleware(['auth:sanctum', 'verified'])->get('/demandnotes', function () {
    return view('demandnotes');
})->name('demandnotes');

Route::middleware(['auth:sanctum', 'verified'])->get('/reports', function () {
    return view('reports');
})->name('reports');

