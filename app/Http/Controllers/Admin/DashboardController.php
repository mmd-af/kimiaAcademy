<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $email = Auth::user()->email;
        alert()->success("کاربر ".$email, 'خوش آمدید');
        return view('admin.dashboard.dashboard');
    }
}
