<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index(Request $request)
    {
        return view('admin.app');
    }

    public function add(Request $request)
    {
        return view('admin.transaction.add');
    }

    public function getRekap(Request $request)
    {
        return view('admin.transaction.rekap');
    }
}
