<?php

namespace App\Repository;

use App\Model\TransactionMaster;
use App\Model\TransactionDetail;
use Illuminate\Http\Request;

class TransactionDetailRepository
{
    public function getRekap($request)
    {
        $perPage = $request->get('per_page', 10);
        $paidFrom = $request->get('date_paid_from');
        $paidTo = $request->get('date_paid_to');
        $category = $request->get('type', 'income');
        $name = $request->get('name');

        $query = TransactionDetail::where('type', $category);

        if (isset($paidFrom) && isset($paidTo)) {
            $query->whereDate('created_at', '>=', $paidFrom)
                ->whereDate('created_at', '<=', $paidTo);
        }

        if (isset($name)) {
            $query->where('name', 'LIKE', '%'.$name.'%');
        }

        $results = $query->paginate($perPage);

        return $results;
    }
}
