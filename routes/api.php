
<?php

use App\Http\Controllers\Api\BahasaDaerahController;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\Tarian;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CulturesController;
use App\Http\Controllers\Api\ProvincesController;
use App\Http\Controllers\Api\CategoriesController;
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

// Provinces
Route::get('provinces', [ProvincesController::class, 'index']);
Route::get('provinces/{id}', [ProvincesController::class, 'show']);
Route::post('provinces', [ProvincesController::class, 'store']);
Route::put('provinces/{id}', [ProvincesController::class, 'update']);