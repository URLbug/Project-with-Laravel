<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers;

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

Route::get('/', function() {
    return view('index', [
        'projects' => DB::table('projects')
            ->limit(10)->get(),
    ]);
});

Route::get(
    '{id}/project/',
    [
        Controllers\ProjectController::class,
        'index',
    ]
)->where('id', '[0-9]+');

