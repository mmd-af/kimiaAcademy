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

    public function store(Request $request)
    {


            $a = $this->ItemRepository->store($request);
           dd ($a);

////        dd($request->lesson[1]);
//        $items= $request->except(['_token']);
//        foreach ($items as $key => $item){
//dd($key);
//            $item->lesson = $item->lesson[$key];
//            $item->is_free = $item->is_free[$key];
//                $item->save();
//        }

//        $item = $this->ItemRepository->store($request);
//        return redirect()->route('admin.items.index');

    }
//
//
//    public function show($id)
//    {
//        //
//    }
//
//
    public function edit(Item $item)
    {
//        $itemCatgory = $item->items->first();
//        $itemVideo = $item->videos();
//        $items = $this->ItemRepository->getCategory();
//        return view('admin.items.edit', compact('item', 'items', 'itemCatgory', 'itemVideo'));
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
//        $this->ItemRepository->destroy($item);
//        return redirect()->route('admin.items.index');
    }
}
