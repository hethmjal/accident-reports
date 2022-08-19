<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnyMangmentController;
use App\Http\Controllers\OVRController;
use App\Http\Controllers\QMController;
use App\Http\Controllers\RiskManagerController;
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
    return view('home');
})->name('home');



Route::get('enter', [OVRController::class,'index'])->name('enter');
Route::post('/event/store', [OVRController::class,'store'])->name('event.store');


Route::get('/risk-manager', [RiskManagerController::class,'index'])->middleware(['auth'])->name('riskmanager.index');
Route::get('/risk-manager/report/{id}', [RiskManagerController::class,'shareReport'])->middleware(['auth'])->name('riskmanager.shareReport');
Route::get('/share-report', [RiskManagerController::class,'shareReportWithDepartment'])->middleware(['auth']);
Route::get('/risk-manager/addinforeport/{id}', [RiskManagerController::class,'addinforeport'])->middleware(['auth'])->name('riskmanager.addinforeport');
Route::post('/addinforeport/store', [RiskManagerController::class,'store_info'])->name('event.store_info');
Route::post('/addinforeport/save', [RiskManagerController::class,'save_info'])->name('event.save_info');
Route::get('/risk-manager/final-report/{event_id}', [RiskManagerController::class,'final_report'])->middleware(['auth'])->name('riskmanager.final_report');



Route::get('/indexManagment', [AnyMangmentController::class,'index'])->middleware(['auth'])->name('indexManagment');
Route::get('/commentreport/{id}', [AnyMangmentController::class,'commentreport'])->middleware(['auth'])->name('commentreport');
Route::get('/send_comment', [AnyMangmentController::class,'send_comment'])->middleware(['auth'])->name('send_comment');
Route::get('/save_comment', [AnyMangmentController::class,'save_comment'])->middleware(['auth'])->name('save_comment');
Route::get('/finalManagmnetReport/{event_id}', [AnyMangmentController::class,'final_report'])->middleware(['auth'])->name('finalManagmnetReport');


Route::get('/indexQM', [QMController::class,'index'])->middleware(['auth'])->name('QM');

Route::get('/reset-account', [AdminController::class,'reset_account_page'])->middleware(['auth'])->name('reset-account');

Route::post('/reset-account/store', [AdminController::class,'reset_account'])->middleware(['auth']);

Route::get('/ok', [AdminController::class,'ok'])->middleware(['auth'])->name('ok');


require __DIR__.'/auth.php';
