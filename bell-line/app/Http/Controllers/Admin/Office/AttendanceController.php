<?php

namespace App\Http\Controllers\Admin\Office;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index(Request $request)
    {
        // ?month=2025-10 のように指定できる
        $monthParam = $request->query('month');
        $currentMonth = $monthParam ? Carbon::parse($monthParam) : Carbon::now();

        // 表示月の開始日と終了日
        $startOfMonth = $currentMonth->copy()->startOfMonth();
        $endOfMonth = $currentMonth->copy()->endOfMonth();

        // 日付リストを生成
        $dates = [];
        for ($date = $startOfMonth->copy(); $date->lte($endOfMonth); $date->addDay()) {
            $dates[] = [
                'day' => $date->format('d'),
                'weekday' => $date->isoFormat('dd'),
                'is_today' => $date->isToday(),
                'is_sunday' => $date->isSunday(),
                'is_saturday' => $date->isSaturday(),
            ];
        }

        // 前月・翌月リンク用
        $prevMonth = $currentMonth->copy()->subMonth()->format('Y-m');
        $nextMonth = $currentMonth->copy()->addMonth()->format('Y-m');

        return view('office.attendances', compact('dates', 'currentMonth', 'prevMonth', 'nextMonth'));
    }
}
