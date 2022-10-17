<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function AdminDashboard(){
        return view('backend.dashboard.admin_dashboard');
    }
}
