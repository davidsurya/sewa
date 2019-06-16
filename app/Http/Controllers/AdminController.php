<?php

namespace App\Http\Controllers;

use App\Model\TransactionDetail;
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
        $perPage = $request->get('per_page', 10);

        $results = TransactionDetail::paginate($perPage);

        return view('admin.transaction.rekap', ['results' => $results]);
    }
}
