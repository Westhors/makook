<?php

use App\Http\Controllers\Front\DesignController;
use Illuminate\Support\Facades\Route;
use App\Models\Design;
use Barryvdh\DomPDF\Facade\Pdf;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/order', [DesignController::class, 'create'])->name('design.apply');
Route::get('/order-group', [DesignController::class, 'createGroubOrder'])->name('order.group');
Route::post('/order', [DesignController::class, 'store'])->name('design.store');


// Route::get('/admin/designs/{design}/print-invoice', function (Design $design) {
//     return view('filament.resources.design-resource.invoice', [
//         'record' => $design,
//     ]);
// })->name('filament.admin.designs.print-invoice');


Route::get('/admin/designs/{record}/invoice', function ($record) {
    $design = Design::findOrFail($record);
    return view('filament.resources.design-resource.invoice', compact('design'));
})->name('filament.admin.designs.print-invoice')->middleware(['web', 'auth']);
