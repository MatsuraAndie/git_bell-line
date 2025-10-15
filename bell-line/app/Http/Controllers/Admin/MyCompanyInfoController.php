<?php

namespace App\Http\Controllers\Admin;

use App\Models\MyCompanyInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyCompanyInfoController extends Controller
{
    // 編集画面を表示
    public function edit()
    {
        $my_company_info = MyCompanyInfo::first();
        return view('office.company', compact('my_company_info'));
    }

    // 更新処理
    public function update(Request $request)
    {
        $validated = $request->validate([
            'name'         => 'required|string|max:100',
            'zip'          => 'nullable|string|max:10',
            'address'      => 'nullable|string|max:255',
            'tel'          => 'nullable|string|max:20',
            'email'        => 'nullable|email|max:100',
            'bank_name'    => 'nullable|string|max:100',
            'bank_branch'  => 'nullable|string|max:100',
            'bank_type'    => 'nullable|string|max:50',
            'bank_number'  => 'nullable|string|max:50',
            'note'         => 'nullable|string|max:1000',
        ]);

        $company = MyCompanyInfo::first() ?? new MyCompanyInfo();
        $company->fill($validated)->save();

        return redirect()->back()->with('success', '会社情報を更新しました。');
    }
}
