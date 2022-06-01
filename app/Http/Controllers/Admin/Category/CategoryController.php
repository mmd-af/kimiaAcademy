<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\CategoryRequest;
use App\Models\Category\Category;
use App\Repositories\Admin\CategoryRepository;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        return view('admin.categories.index');
    }

    public
    function create()
    {
        return view('admin.categories.create');

    }

    public
    function store(CategoryRequest $request)
    {
        $category = $this->categoryRepository->store($request);

        return redirect()->route('admin.categories.index');
    }

    public
    function show($id)
    {
        //
    }

    public
    function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));

    }

    public
    function update(Request $request, $category)
    {
        dd($category);
    }

    public
    function destroy($id)
    {
        //
    }
}
