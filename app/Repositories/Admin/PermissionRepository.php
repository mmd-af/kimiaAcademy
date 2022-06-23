<?php

namespace App\Repositories\Admin;


use App\Models\Permission\Permission;

class PermissionRepository extends BaseRepository
{
    public function __construct(Permission $model)
    {
        $this->setModel($model);
    }

    public function getAll()
    {
        return Permission::query()
            ->select([
                'id',
                'name',
                'display_name'
            ])
            ->paginate(10);
    }

//
//    public function getDatatableData($request)
//    {
//        if ($request->ajax()) {
//            $data = $this->getAll();
//            return Datatables::of($data)
//                ->addIndexColumn()
//                ->addColumn('action', function ($row) {
//                    $show = route('admin.courses.show', $row->id);
//                    $edit = route('admin.courses.edit', $row->id);
//                    $destroy = route('admin.courses.destroy', $row->id);
//                    $c = csrf_field();
//                    $m = method_field('DELETE');
//                    return
//                        "
//                    <div class='d-flex justify-content-center'>
//                    <a href='{$show}' class='btn btn-outline-primary btn-sm'>سر فصل ها</a>
//                    <a href='{$edit}' class='btn btn-outline-info btn-sm mx-2'>ویرایش</a>
//                    <form action='{$destroy}' method='POST' id='myForm'>
//                    $c
//                    $m
//                    <button type='submit' onclick='fireSweetAlert(form); return false' class='btn btn-sm btn-outline-danger'>حذف</button>
//                    </form>
//                    </div>
//                    ";
//                })
//                ->rawColumns(['action'])
//                ->make(true);
//        }
//    }

    public function store($request)
    {
        $item = new Permission();
        $item->name = $request->input('name');
        $item->display_name = $request->input('display_name');
        $item->guard_name = "web";
        $item->save();
    }

//    public function update($request, $course)
//    {
//        DB::beginTransaction();
//        try {
//            $course->title = $request->input('title');
//            $course->slug = $request->input('slug');
//            $course->description = $request->input('description');
//            $course->actual_price = $request->input('actual_price');
//            $course->discount_price = $request->input('discount_price');
//            $course->is_active = $request->input('is_active');
//            $course->course_lang = $request->input('course_lang');
//            $course->course_time = $request->input('course_time');
//            $course->course_size = $request->input('course_size');
//            $course->course_kind = $request->input('course_kind');
//            $course->save();
//            $course->categories()->sync($request->input('category_id'));
//            $course->videos()->update(['url' => $request->input('url')]);
//            $course->images()->update(['url' => $request->input('image_url')]);
//            DB::commit();
//            return $course;
//        } catch (\Exception $error) {
//            DB::rollback();
//            return $error;
//        }
//    }
//
//    public function destroy($course)
//    {
//        $course->delete();
//    }
}
