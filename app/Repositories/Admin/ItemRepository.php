<?php

namespace App\Repositories\Admin;

use App\Models\Category\Category;
use App\Models\Course\Course;
use App\Models\Item\Item;
use Yajra\DataTables\Facades\DataTables;


class ItemRepository extends BaseRepository
{
    public function __construct(Item $model)
    {
        $this->setModel($model);
    }
    public function getAll()
    {
        return Item::query()
            ->select([
                'course_id',
                'title',
                'description',
                'is_free',
                'parent_id',
            ])
            ->orderBy('sort','desc')
            ->get();

    }

    public function getCourse()
    {
        return Course::query()
            ->select([
                'id',
                'title',
            ])
            ->where('is_active', 1)
            ->get();
    }


    public function getDatatableData($request)
    {
        if ($request->ajax()) {
            $data = $this->getAll();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $edit = route('admin.items.edit', $row->id);
                    $destroy = route('admin.items.destroy', $row->id);
                    $c = csrf_field();
                    $m = method_field('DELETE');
                    return
                        "
                    <div class='d-flex justify-content-center'>
                    <a href='{$edit}' class='btn btn-outline-info btn-sm mx-2'>ویرایش</a>
                    <form action='{$destroy}' method='POST'>
                    $c
                    $m
                    <button type='submit' class='btn btn-sm btn-outline-danger'>حذف</button>
                    </form>
                    </div>
                    ";
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
