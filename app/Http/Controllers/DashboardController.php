<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        $data = [
            'title' => 'Dashboard',
            'url' => url('/'),
        ];
        return view('pages.dashboard.index', compact('data'));
    }
}
