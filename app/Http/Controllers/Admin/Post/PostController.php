<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\PostRequest;
use App\Models\Category\Category;
use App\Repositories\Admin\PostRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $PostRepository;

    public function __construct(PostRepository $PostRepository)
    {
        $this->PostRepository = $PostRepository;
    }

    public function index()
    {

        $posts = $this->PostRepository->getAll();
        return view('admin.posts.index', compact('posts'));

    }

    public function create()
    {
        $categories = Category::where('parent_id', 0)->where('type', 'Post')->get();

        return view('admin.posts.create', compact('categories'));

    }

    public function store(PostRequest $request)
    {
        $category = $this->PostRepository->store($request);

        return redirect()->route('admin.posts.index');
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
