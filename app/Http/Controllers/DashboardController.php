<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalApps = Application::count();
        $totalAdmins = User::count();

        return view('dashboard.index', compact(
            'totalApps',
            'totalAdmins'
        ));
    }
}