<?php

namespace App\Repositories\Admin;

use App\Models\Category\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Yajra\DataTables\Facades\DataTables;

class CategoryRepository extends BaseRepository
{
    public function __construct(Category $model)
    {
        $this->setModel($model);
    }

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
                'id',
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
        $item->title = $request->input('title');
        $item->slug = SlugService::createSlug(Category::class, 'slug', $request->input('slug'));
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

    public function update($request, $category)
    {
        $category->title = $request->input('title');
        $category->slug = $request->input('slug');
        $category->type = $request->input('cat_type');
        $category->parent_id = $request->input('parent_id');
        $category->save();
        return $category;
    }

    public function destroy($category)
    {
        $category->delete();
    }

}
