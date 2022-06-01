<?php

namespace App\Repositories\Admin;

use App\Models\Category\Category;
use Yajra\DataTables\Facades\DataTables;

class CategoryRepository
//    extends BaseRepository
{
//    public function __construct(Course $model)
//    {
//        $this->setModel($model);
//    }

    public function getAll()
    {
        return Category::query()
            ->select([
                'title',
                'slug',
                'parent_id',
                'type'
            ])->get();

    }

    public function getLatest()
    {
        return Category::query()
            ->select([
                'title',
                'slug',
                'type',
                'parent_id'

            ])
            ->latest()
            ->paginate(10);

    }

    public function getCategoryByType($type)
    {
        return Category::query()
            ->select([
                'id',
                'title',
                'slug',
                'parent_id',
                'type'
            ])
            ->where('type', $type)
            ->get();
    }

    public function store($request)
    {
        $item = new Category();
        $item->title = $request->input('Category_title');
        $item->slug = $request->input('slug');
        $item->type = $request->input('cat_type');
        $item->parent_id = $request->input('parent_id');
        $item->save();
        return $item;
    }

    public function getDatatableData($request)
    {
        if ($request->ajax()) {
            $data = $this->getAll();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $edit = route('admin.categories.edit',$row->id) ;
                    $btn = "<a class='btn btn-info btn-sm mr-2' href='{$edit}' >ویرایش</a>";
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
