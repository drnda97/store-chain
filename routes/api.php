<?php
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ShopsController;
use App\Http\Controllers\BillsController;
use App\Http\Controllers\CustomersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('products', ProductsController::class);
Route::resource('shops', ShopsController::class);
Route::resource('bills', BillsController::class);
Route::resource('customers', CustomersController::class);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
