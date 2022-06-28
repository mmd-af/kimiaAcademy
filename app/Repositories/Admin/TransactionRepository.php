<?php

namespace App\Repositories\Admin;

use App\Models\Transaction\Transaction;
use App\Models\User\User;
use Yajra\DataTables\Facades\DataTables;

class TransactionRepository extends BaseRepository
{
    public function __construct(Transaction $model)
    {
        $this->setModel($model);
    }

    public function getAll()
    {
        return Transaction::query()
            ->select([
                'id',
                'user_id',
                'credit',
                'ref_id',
                'status'
            ])
            ->with('users')
            ->get();
    }

    public function getDatatableData($request)
    {
        if ($request->ajax()) {
            $data = $this->getAll();
            return Datatables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
    }
}
