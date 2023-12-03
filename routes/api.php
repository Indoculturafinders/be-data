
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CulturesController;
use App\Http\Controllers\Api\ProvincesController;
use App\Http\Controllers\Api\RumahAdatController;
use App\Http\Controllers\Api\CategoriesController;

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

// Provinces
Route::get('provinces', [ProvincesController::class, 'index']);
Route::get('provinces/{id}', [ProvincesController::class, 'show']);
Route::post('provinces', [ProvincesController::class, 'store']);
Route::put('provinces/{id}', [ProvincesController::class, 'update']);
Route::delete('provinces/{id}', [ProvincesController::class, 'destroy']);

// Categories
Route::get('categories', [CategoriesController::class, 'index']);
Route::get('categories/{id}', [CategoriesController::class, 'show']);
Route::post('categories', [CategoriesController::class, 'store']);
Route::put('categories/{id}', [CategoriesControllers::class, 'update']);
Route::delete('categories/{id}', [CategoriesController::class, 'destroy']);

// Culture
Route::get('cultures', [CulturesController::class, 'index']);
Route::get('cultures/{id}', [CulturesController::class, 'show']);
Route::get('cultures/search/{name}', [CulturesController::class, 'searchByProvince']);
Route::put('cultures/{id}', [CulturesController::class, 'update']);
Route::delete('cultures/{id}', [CulturesController::class, 'destroy']);

// Rumah Adat
Route::get('rumah-adat', [RumahAdatController::class, 'index']);
Route::get('rumah-adat/{id}', [RumahAdatController::class, 'show']);
Route::get('rumah-adat/search/name/{name}', [RumahAdatController::class, 'searchByName']);
Route::get('rumah-adat/search/province/{name}', [RumahAdatController::class, 'searchByProvince']);

// Baju Adat
Route::get('baju-adat', [BajuAdatController::class, 'index']);
Route::get('baju-adat/{id}', [BajuAdatController::class, 'show']);
Route::get('baju-adat/search/name/{name}', [BajuAdatController::class, 'searchByName']);
Route::get('baju-adat/search/province/{name}', [BajuAdatController::class, 'searchByProvince']);

// Upacara Adat
Route::get('upacara-adat', [UpacaraAdatController::class, 'index']);  

// Tarian
Route::get('tarian', [Tarian::class, 'index']);