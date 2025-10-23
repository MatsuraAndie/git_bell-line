<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Office\MyCompanyInfoController;
use App\Http\Controllers\Admin\Office\AttendanceController;

Route::view('/',   'login');

Route::view('/driver/menu',   'driver.index')->name('driver.menu');
Route::view('/driver/report',   'driver.report')->name('driver.report');
Route::view('/driver/schedule', 'driver.schedule')->name('driver.schedule');
Route::view('/driver/attendance', 'driver.attendance')->name('driver.attendance');

Route::view('/office/menu',   'office.index')->name('office.menu');
Route::view('/office/schedules',   'office.schedules')->name('office.schedules');   // 配車スケジュール管理
Route::view('/office/schedules/create',   'office.schedules_create')->name('office.schedules_create');   // 配車スケジュール管理
Route::view('/office/reports',     'office.reports')->name('office.reports');     // 日報一覧確認
// Route::view('/office/attendances', 'office.attendances')->name('office.attendances'); // 出勤表入力・管理
Route::view('/office/search',      'office.search')->name('office.search');      // 配車検索
Route::view('/office/payslips',    'office.payslips')->name('office.payslips');    // 給与明細出力
Route::view('/office/invoices',    'office.invoices')->name('office.invoices');    // 請求書出力
Route::view('/office/bonus',    'office.bonus')->name('office.bonus');          // 賞与出力
Route::view('/office/payroll',     'office.payroll')->name('office.payroll');     // 賃金台帳出力
Route::view('/office/employees',   'office.employees')->name('office.employees');   // 社員登録
Route::view('/office/vehicles',    'office.vehicles')->name('office.vehicles');    // 車両登録
Route::view('/office/customers',   'office.customers')->name('office.customers');   // 顧客登録
Route::view('/office/routes',      'office.routes')->name('office.routes');      // ルート登録
Route::view('/office/user',      'office.user')->name('office.user');      // ユーザー管理
Route::view('/office/user/create',      'office.user_create')->name('office.user_create');
// Route::view('/office/company',     'office.company');     // 会社情報

// ▼会社情報登録
Route::get('/office/company', [MyCompanyInfoController::class, 'edit'])->name('company.edit');
Route::post('/office/company', [MyCompanyInfoController::class, 'update'])->name('company.update');

// ▼勤怠管理カレンダー
Route::get('/office/attendances', [AttendanceController::class, 'index'])->name('attendances.index');
