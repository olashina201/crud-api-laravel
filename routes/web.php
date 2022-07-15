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

Route::get("phonebooks", [CrudApi::class => 'list']);
Route::get("phonebooks/{id}", [CrudApi::class, 'getSinglePhoneBook']);
Route::post("phonebook", [CrudApi::class, 'getSinglePhoneBook']);
Route::put("phonebook/{id}", [CrudApi::class, 'updatePhoneBook']);
Route::delete("phonebook/{id}", [CrudApi::class, 'deletePhoneBook']);

