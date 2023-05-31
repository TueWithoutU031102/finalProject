<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ManagerController;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'customer'], function () {
    /////// CUSTOMER ///////

    Route::get('index', [CustomerController::class, 'index'])->name('books.index');

    Route::get('bookForm', [CustomerController::class, 'bookForm']);

    Route::post('store', [CustomerController::class, 'store']);

    // Route::get("showAcc/{id}", [Controller::class, 'showAcc']);

    // Route::get("editAcc/{id}", [Controller::class, 'showFormEditAccount']);

    // Route::post("editAcc/{id}", [Controller::class, 'updateAcc']);

    // Route::post("deleteAcc/{user}", [Controller::class, 'delete']);
});

Route::group(['prefix' => 'manager'], function () {
    Route::get('index', [ManagerController::class, 'index'])->name('index');

    Route::get('indexMenu', [ManagerController::class, 'menu'])->name('indexMenu');
    Route::get('formMenu', [ManagerController::class, 'createFormMenu']);
    Route::post('createMenu', [ManagerController::class, 'createMenu']);
    Route::get('detailMenu/{id}',[ManagerController::class, 'detailMenu']);

    Route::get('indexType', [ManagerController::class, 'type'])->name('indexType');
    Route::get('formType', [ManagerController::class, 'createFormType']);
    Route::post('createType', [ManagerController::class, 'createType']);
});

Route::group(['prefix' => 'staff'], function () {
});
