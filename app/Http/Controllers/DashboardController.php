<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Implement logic to get sales figures and display the dashboard
        return view('dashboard.index');
    }

    public function transactionHistory()
    {
        return view('dashboard.transaction-history');
    }
}