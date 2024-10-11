<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\OrganizersController;
use App\Http\Controllers\EventCategoriesController;
use App\Http\Controllers\MasterEventController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// Route untuk Events
Route::get('/events', [EventsController::class, 'index'])->name('events.index');
Route::get('/events/{id}', [EventsController::class, 'show'])->name('events.show');

// Resource Routes untuk Organizers
Route::resource('organizer', OrganizersController::class);

// Resource Routes untuk Event Categories
Route::resource('event_categories', EventCategoriesController::class);

// Resource Routes untuk Master Events
Route::resource('masterEvents', MasterEventController::class);
