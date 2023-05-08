<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'customer'], function () {
    /////// CUSTOMER//

    // Route::get('acc', [Controller::class, 'acc'])->name('admin.acc');

    Route::get('bookForm', [CustomerController::class, 'bookForm']);

    Route::post('book', [CustomerController::class, 'book']);

    // Route::get("showAcc/{id}", [Controller::class, 'showAcc']);

    // Route::get("editAcc/{id}", [Controller::class, 'showFormEditAccount']);

    // Route::post("editAcc/{id}", [Controller::class, 'updateAcc']);

    // Route::post("deleteAcc/{user}", [Controller::class, 'delete']);
});
