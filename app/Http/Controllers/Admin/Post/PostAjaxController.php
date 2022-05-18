<?php

namespace App\Http\Controllers\Admin\Category;


use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Repositories\Admin\CategoryRepository;
use Illuminate\Http\Request;

class PostAjaxController extends Controller
{
    protected $postRepository;

    public function __construct(CategoryRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function postType(Request $request)
    {

//        dd($request->value);

        if ($request->value == 1) {
//            return $this->postRepository->getAll()->where('type',1);
            $data = Category::query()
                ->select([
                    'id',
                    'title',
                    'parent_id',
                    'type'
                ])
                ->where('type', 'course')
                ->where('parent_id' <> 0)
                ->get();

        } elseif ($request->value == 2) {
            $data = Category::query()
                ->select([
                    'id',
                    'title',
                    'parent_id',
                    'type'
                ])
                ->where('type', 'post')
                ->where('parent_id' <> 0)
                ->get();
        }
//        return $this->postRepository->searchItems($request);
        return $data;
    }
}
