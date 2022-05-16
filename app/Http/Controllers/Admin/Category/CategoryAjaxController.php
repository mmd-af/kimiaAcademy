<?php

namespace App\Http\Controllers\Admin\Category;


use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Repositories\Admin\CategoryRepository;
use Illuminate\Http\Request;

class CategoryAjaxController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function categoryType(Request $request)
    {

//        dd($request->value);

        if ($request->value == 1) {
//            return $this->categoryRepository->getAll()->where('type',1);
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
//        return $this->categoryRepository->searchItems($request);
        return $data;
    }
}
