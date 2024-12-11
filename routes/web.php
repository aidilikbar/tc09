<?php

use Illuminate\Support\Facades\Route;

// Default welcome page route
Route::get('/', function () {
    return view('welcome');
});

// Add resource routes for tc09 entities
use App\Http\Controllers\ActorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TruckController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OtherTcOrderController;
use App\Http\Controllers\RouteController;

Route::resources([
    'actors' => ActorController::class,
    'products' => ProductController::class,
    'trucks' => TruckController::class,
    'deliveries' => DeliveryController::class,
    'orders' => OrderController::class,
    'other-tc-orders' => OtherTcOrderController::class,
    'routes' => RouteController::class,
]);