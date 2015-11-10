<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
    public function authenticate()
    {
        return view('pages.dashboard');
    }

//    private function showDashboard() {
//        return view('pages.dashboard');
//    }
}
