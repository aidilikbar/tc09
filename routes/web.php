<?php

use Illuminate\Support\Facades\Route;

// Default welcome page route
//Route::get('/', function () {
//    return view('welcome');
//});
use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index'])->name('home');

// Add resource routes for tc09 entities
use App\Http\Controllers\ActorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TruckController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OtherTcOrderController;
use App\Http\Controllers\RouteController;
//use App\Http\Controllers\DistanceController;

Route::resources([
    'actors' => ActorController::class,
    'products' => ProductController::class,
    'trucks' => TruckController::class,
    'deliveries' => DeliveryController::class,
    'orders' => OrderController::class,
    'other-tc-orders' => OtherTcOrderController::class,
    'routes' => RouteController::class,
//    'calculate-distance' => DistanceController::class,
]);

//use App\Http\Controllers\DistanceController;

use App\Http\Controllers\DistanceController;

Route::get('/calculate-distance', [DistanceController::class, 'index'])->name('calculate-distance.index');
Route::post('/calculate-distance', [DistanceController::class, 'calculateDistance'])->name('calculate-distance.calculate');