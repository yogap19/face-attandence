<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard()
    {
        $data = [
            'response_attendence'   => Attendance::all(),
            'count'                 => count(Attendance::all())
        ];
        return view('Admin/dashboard', $data);
    }
    function scores()
    {
        $data = [
            'response_attendence'   => Attendance::all(),
            'count'                 => count(Attendance::all())
        ];
        return view('Admin/scores', $data);
    }

    function profile()
    {
        $data = [];
        return view('Admin/profile', $data);
    }
}
