<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function superAdmin()
    {
        return view('dashboards.superadmin');
    }

    public function schoolAdmin()
    {
        return view('dashboards.schooladmin');
    }

    public function teacher()
    {
        return view('dashboards.teacher');
    }

    public function student()
    {
        return view('dashboards.student');
    }

    public function parent()
    {
        return view('dashboards.parent');
    }

    public function bursar()
    {
        return view('dashboards.bursar');
    }
}
