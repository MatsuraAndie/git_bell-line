<?php

use Illuminate\Support\Facades\Route;

/**
 * トップ（メニュー）
 */
Route::view('/', 'menu.index')->name('menu');

/**
 * ドライバー用
 */
Route::prefix('driver')->name('driver.')->group(function () {
    Route::get('reports/create',  [App\Http\Controllers\Driver\ReportController::class, 'create'])->name('reports.create'); // 日報入力
    Route::post('reports',        [App\Http\Controllers\Driver\ReportController::class, 'store'])->name('reports.store');
    Route::get('schedule',        [App\Http\Controllers\Driver\ScheduleController::class, 'index'])->name('schedule');     // スケジュール参照
    Route::get('attendance',      [App\Http\Controllers\Driver\AttendanceController::class, 'showMine'])->name('attendance'); // 勤怠確認
});

/**
 * 事務所用（管理）
 */
Route::prefix('office')->name('office.')->group(function () {
    // 配車スケジュール管理
    Route::resource('schedules',   App\Http\Controllers\Office\ScheduleController::class)->only(['index','create','store','edit','update','destroy']);

    // 日報一覧確認
    Route::get('reports', [App\Http\Controllers\Office\ReportController::class, 'index'])->name('reports.index');

    // 勤怠：入力・管理・一覧
    Route::resource('attendances', App\Http\Controllers\Office\AttendanceController::class)->only(['index','store','update','destroy']);

    // 出力（GETでPDF/CSV生成）
    Route::get('exports/payslips',     [App\Http\Controllers\Office\ExportController::class,'payslips'])->name('exports.payslips');
    Route::get('exports/invoices',     [App\Http\Controllers\Office\ExportController::class,'invoices'])->name('exports.invoices');
    Route::get('exports/payroll-ledger',[App\Http\Controllers\Office\ExportController::class,'payrollLedger'])->name('exports.payroll_ledger');
    Route::get('exports/schedule',     [App\Http\Controllers\Office\ExportController::class,'schedule'])->name('exports.schedule');
    Route::get('search/schedules',     [App\Http\Controllers\Office\SearchController::class,'schedules'])->name('search.schedules');

    // マスタ（会社/社員/車両/顧客/ルート）
    Route::resource('companies', App\Http\Controllers\Office\CompanyController::class)->only(['edit','update']);
    Route::resource('employees', App\Http\Controllers\Office\EmployeeController::class);
    Route::resource('vehicles',  App\Http\Controllers\Office\VehicleController::class);
    Route::resource('customers', App\Http\Controllers\Office\CustomerController::class);
    Route::resource('routes',    App\Http\Controllers\Office\RouteController::class);
});
