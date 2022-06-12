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


    public function store($request)
    {


//        $col = collect($request->all())->filter(function ($value, $key) {
//            return is_array($value);
//        })->toArray();
//
//
//
//
//        $season = new Item();
//        $season->title = $request->season;
//        $season->course_id = $request->course;
//        $season->description ='salam';
//        $season->sort = 0;
//        $season->save();
//        $item = new Item();



//        $item = new Item();
//        $l = collect($col)->filter(function ($items,$keys) use ($request,$season){
//
//            return      $items;
//        })->toArray();
//        var_dump($l);

//            $l = collect($col)->map(function ($item,$keys){
//
//            });
//
//
//            return $l;
//        $a = $col->map(function ($item , $key){
//
//            return  collect($key)->map(function ($i,$k){
//                return  $k;
//            });

//                foreach ($item as $k => $v ){
//                    return $v;
//                }
//                return $key;
//                $item->map(function ($i , $k ){
//                    return $i;
//                });
//        });

//        DB::beginTransaction();
//        try {
//            $season = new Item();
//            $season->title = $request->season;
//            $season->course_id = $request->course;
//            $season->description ='salam';
//            $season->sort = 0;
//            $season->save();
//
//            foreach ()
//            $item = new Item();
//            $item->title = $request->lesson
//            $item->parent = $season->id;
//
//            DB::commit();
//        } catch (\Exception $error) {
//            DB::rollback();
//            return $error;
//        }
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
