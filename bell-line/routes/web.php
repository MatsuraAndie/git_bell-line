<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MyCompanyInfoController;


Route::view('/', 'menu.index');

Route::view('/driver/report',   'driver.report');    // 日報入力（静的）
Route::view('/driver/schedule', 'driver.schedule');  // スケジュール参照
Route::view('/driver/attendance', 'driver.attendance');

Route::view('/office/schedules',   'office.schedules');   // 配車スケジュール管理
Route::view('/office/reports',     'office.reports');     // 日報一覧確認
Route::view('/office/attendances', 'office.attendances'); // 出勤表入力・管理
Route::view('/office/search',      'office.search');      // 配車検索
Route::view('/office/payslips',    'office.payslips');    // 給与明細出力
Route::view('/office/invoices',    'office.invoices');    // 請求書出力
Route::view('/office/payroll',     'office.payroll');     // 賃金台帳出力
Route::view('/office/employees',   'office.employees');   // 社員登録
Route::view('/office/vehicles',    'office.vehicles');    // 車両登録
Route::view('/office/customers',   'office.customers');   // 顧客登録
Route::view('/office/routes',      'office.routes');      // ルート登録
// Route::view('/office/company',     'office.company');     // 会社情報


Route::get('/office/company', [MyCompanyInfoController::class, 'edit'])->name('company.edit');
Route::post('/office/company', [MyCompanyInfoController::class, 'update'])->name('company.update');
