<?php

namespace App\Repositories\Admin;

use App\Enums\EItemType;
use App\Models\Course\Course;
use App\Models\Item\Item;
use App\Models\Video\Video;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
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
                'id',
                'course_id',
                'title',
                'description',
                'is_free',
                'parent_id',
            ])
            ->with('course')
            ->with('parent')
            ->latest()
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

    public function storeSeason($request)
    {
        $course_id = $request->course;
        $latestSeason = count($this->getLatesSeason($course_id));
        $season = new Item();
        $season->title = $request->season;
        $season->course_id = $course_id;
        $season->sort = $latestSeason + 1;
        $season->save();
        return $season;
    }

    public function getLatesSeason($course)
    {
        return Item::query()
            ->where('parent_id', 0)
            ->Where('course_id', $course)
            ->orderBy('sort')
            ->get();
    }


    public function store($request)
    {
        DB::beginTransaction();
        try {
            $course_id = $request->course;
            $count = $request->czContainer_czMore_txtCount;
            // return items in request that are arrays
            $items = collect($request->all())->filter(function ($value) {
                return is_array($value);
            })->toArray();
            // first store season
            $season = $this->storeSeason($request);
            //then store lessons
            if (isset($season)) {
                for ($i = 0; $i < $count; $i++) {
                    $lesson = new Item();
                    $lesson->course_id = $course_id;
                    $lesson->title = $items['title'][$i];
                    $lesson->description = $items['description'][$i];
                    $lesson->is_free = $items['is_free'][$i];
                    $lesson->parent_id = $season->id;
                    $lesson->sort = $i + 1;
                    $lesson->save();
                    $video = new Video();
                    $video->url = $items['url'][$i];
                    $lesson->video()->save($video);
                }
                DB::commit();
            }
        } catch (\Exception $error) {
            DB::rollback();
            return $error;
        }
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


    public function update($request, $item)
    {
        if ($item->getRawOriginal('parent_id') == EItemType::SEASON) {
            $item->title = $request->input('title');
            $item->save();
            return $item;
        }
        DB::beginTransaction();
        try {
            $item->title = $request->input('title');
            $item->description = $request->input('description');
            $item->is_free = $request->input('is_free');
            $item->save();
            $item->video()->update(['url' => $request->input('url')]);
            DB::commit();
            return $item;
        } catch (\Exception $error) {
            DB::rollback();
            return $error;
        }
    }

    public function destroy($item)
    {
        if ($item->video())
            $item->video()->delete();
        if ($item->getRawOriginal('parent_id') ==EItemType::SEASON){
            $item->children()->delete();
        }
        $item->delete();
        return $item;

    }
}
