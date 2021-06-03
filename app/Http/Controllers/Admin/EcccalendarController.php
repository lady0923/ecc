<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EcccalendarController extends Controller
{
    public function showCalendar(Request $request, month)
    {
        $calendar = calendar($section, $patient, $month);
        $month = new CarbonImmutable($month);
        
        return view('calendar', compact( 'calendar', 'month'));
    }
}
