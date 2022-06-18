<?php

namespace App\Repositories\Admin;


use App\Enums\EActive;
use App\Models\Comment\Comment;
use Hekmatinasser\Verta\Verta;
use Yajra\DataTables\Facades\DataTables;

class CommentRepository extends BaseRepository
{
    public function __construct(Comment $model)
    {
        $this->setModel($model);
    }

    public function getAll()
    {
        return Comment::query()
            ->select([
                'id',
                'user_id',
                'body',
                'commentable_id',
                'commentable_type',
                'is_active',
                'created_at'
            ])
            ->with('commentable')
            ->get();
    }


    public function getDatatableData($request)
    {
        if ($request->ajax()) {
            $data = $this->getAll();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('commentable_type', function ($row) {
                    return $row->commentable->title;
                })
                ->editColumn('created_at', function ($row) {
                    return verta::instance($row->created_at);
                })
                ->editColumn('is_active', function ($row) {
                    $c = csrf_field();
                    $m = method_field('PUT');
                    $update = route('admin.comments.update', $row->id);
                    $is_active = $row->is_active;
                    $status=$is_active == EActive::YES ? 'checked' : '';
                    return
                        "
                    <form action='{$update}' method='POST'>
                    $c
                    $m
                    <div class='custom-control custom-switch'>
                    <input type='checkbox' class='custom-control-input' id='customSwitches[$row->id]' name='is_active' $status onchange='this.form.submit()'>
                    <label class='custom-control-label' for='customSwitches[$row->id]'></label>
                    </div>
                    </form>

                    ";
                })
                ->addColumn('action', function ($row) {
                    $show = route('admin.comments.show', $row->id);
                    $destroy = route('admin.comments.destroy', $row->id);
                    $c = csrf_field();
                    $m = method_field('DELETE');
                    return
                        "
                    <div class='d-flex justify-content-center'>
                    <a class='btn btn-outline-info btn-sm mx-2' data-toggle='modal' data-target='.bd-example-modal-lg' >نمایش</a>
                    <form action='{$destroy}' method='POST' id='myForm'>
                    $c
                    $m
                    <button type='submit' onclick='fireSweetAlert(form); return false' class='btn btn-sm btn-outline-danger'>حذف</button>
                    </form>
                    </div>
                    ";
                })
                ->rawColumns(['action','is_active'])
                ->make(true);
        }
    }

//
//    public function store($request)
//    {
//
//        $id = Auth::id();
//        $item = new Comment();
//        $item->user_id = $id;
//        $item->title = $request->input('title');
//        $item->slug = SlugService::createSlug(Comment::class, 'slug', $request->input('slug'));
//        $item->description = $request->input('description');
//        $item->view_count = $request->input('view_count');
//        $item->is_active = $request->input('is_active');
//        $item->save();
//
//        $item->categories()->attach($request->input('category_id'));
//
//        $image = new Image();
//        $image->url = $request->input('url');
//        $item->images()->save($image);
//
//
//    }
//
    public function update($request,$comment)
    {
        $comment->is_active = $comment->is_active == EActive::YES ? EActive::NO : EActive::YES;
        $comment->save();
        return $comment;
    }
//
//    public function destroy($category)
//    {
//        $category->delete();
//    }

}
