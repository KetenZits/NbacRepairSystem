<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceUser;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;



class GraphController extends Controller
{
    //
    public function index()
    {
        return view('graph');
    }
        public function chartByDay()
    {
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();

        $rawData = ServiceUser::select(
                DB::raw("DAYNAME(date) as day"),
                DB::raw("COUNT(*) as count")
            )
            ->whereBetween('date', [$startOfWeek, $endOfWeek])
            ->groupBy('day')
            ->pluck('count', 'day'); // [Monday => 3, Tuesday => 0, ...]

        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        $fullData = [];

        foreach ($days as $day) {
            $fullData[] = [
                'label' => $day,
                'count' => $rawData[$day] ?? 0
            ];
        }

        return response()->json([
            'labels' => array_column($fullData, 'label'),
            'data' => array_column($fullData, 'count'),
        ]);
    }

        public function chartByWeek()
    {
        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();

        $rawData = ServiceUser::select(
                DB::raw("FLOOR((DAY(date) - 1) / 7) + 1 as week"),
                DB::raw("COUNT(*) as count")
            )
            ->whereBetween('date', [$startOfMonth, $endOfMonth])
            ->groupBy('week')
            ->pluck('count', 'week'); // [1 => 2, 2 => 0, 3 => 5, ...]

        $fullData = [];
        for ($i = 1; $i <= 5; $i++) {
            $fullData[] = [
                'label' => "สัปดาห์ที่ $i",
                'count' => $rawData[$i] ?? 0
            ];
        }

        return response()->json([
            'labels' => array_column($fullData, 'label'),
            'data' => array_column($fullData, 'count'),
        ]);
    }

        public function chartByMonth()
    {
        $year = Carbon::now()->year;

        $rawData = ServiceUser::select(
                DB::raw("MONTH(date) as month"),
                DB::raw("COUNT(*) as count")
            )
            ->whereYear('date', $year)
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month'); // ได้ key-value: [1 => 5, 2 => 0, ...]

        $fullData = [];
        for ($i = 1; $i <= 12; $i++) {
            $fullData[] = [
                'label' => 'เดือนที่ ' . $i,
                'count' => $rawData[$i] ?? 0
            ];
        }

        return response()->json([
            'labels' => array_column($fullData, 'label'),
            'data' => array_column($fullData, 'count'),
        ]);
    }

    public function chartByYear()
    {
        $minYear = ServiceUser::min(DB::raw("YEAR(date)"));
        $maxYear = ServiceUser::max(DB::raw("YEAR(date)"));

        $rawData = ServiceUser::select(
                DB::raw("YEAR(date) as year"),
                DB::raw("COUNT(*) as count")
            )
            ->groupBy('year')
            ->pluck('count', 'year'); // [2022 => 3, 2023 => 9, ...]

        $fullData = [];
        for ($i = $minYear; $i <= $maxYear; $i++) {
            $fullData[] = [
                'label' => (string) $i,
                'count' => $rawData[$i] ?? 0
            ];
        }

        return response()->json([
            'labels' => array_column($fullData, 'label'),
            'data' => array_column($fullData, 'count'),
        ]);
    }
}
