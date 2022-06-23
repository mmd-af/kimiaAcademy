<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\RoleRepository;

class RoleController extends Controller
{
    protected $roleRepository;

    public function __construct(RoleRepository $RoleRepository)
    {
        $this->roleRepository = $RoleRepository;
    }

    public function index()
    {
        $roles = $this->roleRepository->getAll();
        return view('admin.roles.index', compact('roles'));
    }

//    public function create()
//    {
//        $categories = $this->roleRepository->getCategory();
//        return view('admin.roles.create', compact('categories'));
//    }
//
//    public function store(RoleStoreRequest $request)
//    {
//        $this->roleRepository->store($request);
//        alert()->success("با تشکر", 'دوره ی مورد نظر با موفقیت ثبت شد');
//        return redirect()->route('admin.roles.index');
//    }
//
//    public function show(Role $role, Item $item)
//    {
//        return view('admin.roles.show', compact('role', 'item'));
//    }
//
//    public function edit(Role $role)
//    {
//        $roleCategory = $role->categories->first();
//        $roleVideo = $role->videos();
//        $categories = $this->roleRepository->getCategory();
//        return view('admin.roles.edit', compact('role', 'categories', 'roleCategory', 'roleVideo'));
//    }
//
//    public function update(PostUpdateRequest $request, Role $role)
//    {
//        $this->roleRepository->update($request, $role);
//        alert()->success("با تشکر", 'دوره ی مورد نظر با موفقیت ویرایش شد');
//        return redirect()->route('admin.roles.index');
//    }
//
//    public function destroy(Role $role)
//    {
//        $this->roleRepository->destroy($role);
//        return redirect()->route('admin.roles.index');
//    }
}
