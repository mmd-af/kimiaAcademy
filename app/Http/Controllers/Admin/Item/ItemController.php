<?php

namespace App\Http\Controllers\Admin\Item;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\Item\ItemStoreRequest;
use App\Models\Item\Item;
use App\Repositories\Admin\ItemRepository;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    protected $ItemRepository;

    public function __construct(ItemRepository $ItemRepository)
    {
        $this->ItemRepository = $ItemRepository;
    }

    public function index()
    {
        return view('admin.items.index');
    }

    public function create()
    {
        $courses = $this->ItemRepository->getCourse();
        return view('admin.items.create', compact('courses'));
    }

    public function store(ItemStoreRequest $request)
    {
        $items = $this->ItemRepository->store($request);
        return to_route('admin.items.index');
    }

//    public function show($id)
//    {
//        //
//    }

    public function edit(Item $item)
    {
        return view('admin.items.edit', compact('item'));
    }
//
//
//    public function update(PostUpdateRequest $request, Item $item)
//    {
//        $items = $this->ItemRepository->update($request, $item);
//        return redirect()->route('admin.items.index');
//    }
//
    public function destroy(Item $item)
    {
        $this->ItemRepository->destroy($item);
        return redirect()->route('admin.items.index');
    }
}
