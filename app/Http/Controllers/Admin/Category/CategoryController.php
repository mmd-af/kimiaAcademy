<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\CategoryRequest;
use App\Models\Category\Category;
use App\Repositories\Admin\CategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $CategoryRepository;

    public function __construct(CategoryRepository $CategoryRepository)
    {
        $this->CategoryRepository = $CategoryRepository;
    }

    public function index()
    {

        $categories = $this->CategoryRepository->getLatest();
        return view('admin.categories.index', compact('categories'));

    }

    public function create()
    {
        $categories = Category::where('parent_id', 0)->get();

        return view('admin.categories.create', compact('categories'));

    }

    public function store(CategoryRequest $request)
    {
        $category = $this->CategoryRepository->store($request);

        return redirect()->route('admin.categories.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
