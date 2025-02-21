<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\ArticleController;
use App\Http\Controllers\API\OpinionController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\Place_randoController;
use App\Http\Controllers\API\Manage_placeController;

Route::middleware('auth:sanctum')->get('/users', function (Request $request) {
    return $request->users();
});

// route api admin
Route::apiResource('admin', UserController::class)->middleware('role:admin');
Route::get('user', [UserController::class, 'index'])->middleware('role:admin');
Route::get('user/{user}', [UserController::class, 'show'])->middleware('role:admin');
Route::post('user', [UserController::class, 'store'])->middleware('role:admin');
Route::put('user/{user}', [UserController::class, 'update'])->middleware('role:admin');
Route::delete('user/{user}', [UserController::class, 'destroy'])->middleware('role:admin');

// route api user
Route::apiResource('user', UserController::class)->middleware('role:user');
Route::get('user', [UserController::class, 'index'])->middleware('role:user');
Route::get('user/{user}', [UserController::class, 'show'])->middleware('role:user');
Route::post('user', [UserController::class, 'store'])->middleware('role:user');
Route::put('user/{user}', [UserController::class, 'update'])->middleware('role:user');
Route::delete('user/{user}', [UserController::class, 'destroy'])->middleware('role:user');


// route api article

Route::apiResource('article', ArticleController::class);

// route api place_rando
Route::apiResource('place_rando', Place_randoController::class);

//route api category

Route::apiResource('category', CategoryController::class);

// route api opinion
Route::apiResource('opinion', OpinionController::class);

// route api manage_place
Route::apiResource('manage_place', Manage_placeController::class);

// route api role
Route::apiResource('role', RoleController::class);




