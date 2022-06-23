<?php

namespace App\Http\Controllers\Admin\Permission;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Permission\PermissionStoreRequest;
use App\Repositories\Admin\PermissionRepository;

class PermissionController extends Controller
{
    protected $permissionRepository;

    public function __construct(PermissionRepository $permissionRepository)
    {
        $this->permissionRepository = $permissionRepository;
    }

    public function index()
    {
        $permissions = $this->permissionRepository->getAll();
        return view('admin.permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('admin.permissions.create');
    }

    public function store(PermissionStoreRequest $request)
    {
        $this->permissionRepository->store($request);
        alert()->success("با تشکر", 'دسترسی ی مورد نظر با موفقیت ثبت شد');
        return redirect()->route('admin.permissions.index');
    }

//    public function show(Permission $Permission, Item $item)
//    {
//        return view('admin.permissions.show', compact('Permission', 'item'));
//    }
//
//    public function edit(Permission $Permission)
//    {
//        $PermissionCategory = $Permission->categories->first();
//        $PermissionVideo = $Permission->videos();
//        $categories = $this->permissionRepository->getCategory();
//        return view('admin.permissions.edit', compact('Permission', 'categories', 'PermissionCategory', 'PermissionVideo'));
//    }
//
//    public function update(PostUpdateRequest $request, Permission $Permission)
//    {
//        $this->permissionRepository->update($request, $Permission);
//        alert()->success("با تشکر", 'دوره ی مورد نظر با موفقیت ویرایش شد');
//        return redirect()->route('admin.permissions.index');
//    }
//
//    public function destroy(Permission $Permission)
//    {
//        $this->permissionRepository->destroy($Permission);
//        return redirect()->route('admin.permissions.index');
//    }
}
