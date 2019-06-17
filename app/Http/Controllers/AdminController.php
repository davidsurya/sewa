<?php

namespace App\Http\Controllers;

use App\Repository\TransactionDetailRepository;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $repository;

    function __construct(TransactionDetailRepository $repository)
    {
        $this->repository = $repository;
    }

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
        $results = $this->repository->getRekap($request);

        return view('admin.transaction.rekap', ['results' => $results]);
    }

    public function getList(Request $request)
    {
        $results = $this->repository->getListTransaction($request);

        return view('admin.transaction.list', ['results' => $results]);
    }
}
