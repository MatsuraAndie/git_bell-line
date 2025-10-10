<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Models\MyCompanyInfo;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;



class MyCompanyInfoController extends Controller
{

  public function show(): RedirectResponse|View
  {

    /** @var MyCompanyInfo $my_company_info */
    $my_company_info = MyCompanyInfo::first();

    /** @var string $screen_id */
    $screen_id = "M011_show";


    return view(
      "admin.my_company_info.show_edit",
      compact(
        "screen_id",
        "my_company_info",
      )
    );
  }






  public function edit(): RedirectResponse|View
  {

    /** @var MyCompanyInfo $my_company_info */
    $my_company_info = MyCompanyInfo::first();

    /** @var string $screen_id */
    $screen_id = "M011_edit";


    return view(
      "admin.my_company_info.show_edit",
      compact(
        "screen_id",
        "my_company_info",
      )
    );
  }

  public function update(Request $request): RedirectResponse
  {


    /** @var MyCompanyInfo $my_company_info */
    $my_company_info = MyCompanyInfo::first();


    // ↓バリデーション
    $request->validate([
      'name' => ['required', 'string', 'max:255'],

    ]);
    // ↑バリデーション

    // ↑ここまでがチェック---------------------------------------------------------------------------------
    $my_company_info->name = $request->name;
    $my_company_info->update();

    return redirect()->route("admin.myCompanyInfo.show")->with(
      "message",
      __("自社情報を更新しました。")
    );
  }
}
