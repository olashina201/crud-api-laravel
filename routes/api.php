<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudApi;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("phonebooks", [CrudApi::class, 'list']);
Route::get("phonebooks/{id}", [CrudApi::class, 'getSinglePhoneBook']);
Route::post("phonebook", [CrudApi::class, 'getSinglePhoneBook']);
Route::put("phonebook", [CrudApi::class, 'updatePhoneBook']);
