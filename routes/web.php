<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAdmin;
use App\Http\Controllers\ControllerAlert;
use App\Http\Controllers\ControllerMaps;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/losbuenosomosmas/admin", [ControllerAdmin::class, "index"]);
Route::post("/losbuenosomosmas/admin", [ControllerAdmin::class, "store"]);
Route::get("/losbuenosomosmas/admin/{id}", [ControllerAdmin::class, "show"]);
Route::put("/losbuenosomosmas/admin/{id}", [ControllerAdmin::class, "update"]);
Route::delete("/losbuenosomosmas/admin/{id}", [ControllerAdmin::class, "destroy"]);
Route::get("/losbuenosomosmas/alert", [ControllerAlert::class, "index"]);
Route::post("/losbuenosomosmas/alert", [ControllerAlert::class, "store"]);
Route::get("/losbuenosomosmas/maps", [ControllerMaps::class, "index"]);
