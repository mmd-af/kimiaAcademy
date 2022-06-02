<?php

namespace App\Repositories\Admin;

use App\Enums\ECategoryType;
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
                'id',
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
                    $edit = route('admin.categories.edit', $row->id);
                    $destroy = route('admin.categories.destroy', $row->id);
                    $token = csrf_token();
                    $btn = "<a class='btn btn-info btn-sm mr-2' href='{$edit}' >ویرایش</a>";
                    $btn = $btn . "<a class='btn btn-danger btn-sm mr-2 cat-destroy' href='' id='$row->id' >حذف</a>";
//                    $btn = $btn . "<form method='post' action='{$destroy}'><button type='submit' class='btn btn-danger btn-sm mr-2' href='{$destroy}' >ddd</button></form/>";
                    return $btn;

                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function update($request, $category)
    {
        dd("dar hale anjam");
        $category->title = $request->input('title');
        $category->slug = $request->input('slug');
        $category->save();
        return $category;

    }

    public function destroy($category)
    {
        $category->delete();
    }

}
