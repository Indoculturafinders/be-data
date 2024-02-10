<?php

use App\Http\Controllers\Api\BahasaDaerahController;
use App\Http\Controllers\Api\BajuAdatController;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\Tarian;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CulturesController;
use App\Http\Controllers\Api\ProvincesController;
use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\MakananKhasController;
use App\Http\Controllers\Api\RumahAdatController;
use App\Http\Controllers\Api\UpacaraAdatController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Categories
Route::get('categories', [CategoriesController::class, 'index']);
Route::get('categories/{id}', [CategoriesController::class, 'show']);
Route::post('categories', [CategoriesController::class, 'store']);
Route::put('categories/{id}', [CategoriesController::class, 'update']);
Route::delete('categories/{id}', [CategoriesController::class, 'destroy']);

// Provinces
Route::get('provinces', [ProvincesController::class, 'index']);
Route::get('provinces/{id}', [ProvincesController::class, 'show']);
Route::post('provinces', [ProvincesController::class, 'store']);
Route::put('provinces/{id}', [ProvincesController::class, 'update']);
Route::delete('provinces/{id}', [ProvincesController::class, 'destroy']);

// Cultures
Route::get('cultures', [CulturesController::class, 'index']);
Route::get('cultures/{id}', [CulturesController::class, 'show']);
Route::get('cultures/search/{name}', [CulturesController::class, 'searchByProvince']);
Route::post('cultures', [CulturesController::class, 'store']);
Route::put('cultures/{id}', [CulturesController::class, 'update']);
Route::delete('cultures/{id}', [CulturesController::class, 'destroy']);
Route::get('cultures', [CulturesController::class, 'getCultures']);


// Tarian
Route::get('dance', [Tarian::class, 'index']);
Route::get('dance/{id}', [Tarian::class, 'show']);
Route::get('dance/search/name/{name}', [Tarian::class, 'searchByName']);
Route::get('dance/search/province/{name}', [Tarian::class, 'searchByProvince']);

// Upacara Adat
Route::get('traditional-ceremonies', [UpacaraAdatController::class, 'index']);
Route::get('traditional-ceremonies/{id}', [UpacaraAdatController::class, 'show']);
Route::get('traditional-ceremonies/search/name/{name}', [UpacaraAdatController::class, 'searchByName']);
Route::get('traditional-ceremonies/search/province/{name}', [UpacaraAdatController::class, 'searchByProvince']);

// Rumah Adat
Route::get('traditional-houses', [RumahAdatController::class, 'index']);
Route::get('traditional-houses/{id}', [RumahAdatController::class, 'show']);
Route::get('traditional-houses/search/name/{name}', [RumahAdatController::class, 'searchByName']);
Route::get('traditional-houses/search/province/{name}', [RumahAdatController::class, 'searchByProvince']);

// Makanan Khas
Route::get('traditional-food', [MakananKhasController::class, 'index']);
Route::get('traditional-food/{id}', [MakananKhasController::class, 'show']);
Route::get('traditional-food/search/name/{name}', [MakananKhasController::class, 'searchByName']);
Route::get('traditional-food/search/province/{name}', [MakananKhasController::class, 'searchByProvince']);

// Baju Adat
Route::get('traditional-costume', [BajuAdatController::class, 'index']);
Route::get('traditional-costume/{id}', [BajuAdatController::class, 'show']);
Route::get('traditional-costume/search/name/{name}', [BajuAdatController::class, 'searchByName']);
Route::get('traditional-costume/search/province/{name}', [BajuAdatController::class, 'searchByProvince']);


// Route::apiResource('categories', CategoriesController::class);
// Route::apiResource('provinces', ProvincesController::class);
// Route::apiResource('cultures', CulturesController::class);