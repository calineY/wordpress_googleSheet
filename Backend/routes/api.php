<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\pluginController;


Route::get('/info', [pluginController::class, 'getPluginInfo']); 
