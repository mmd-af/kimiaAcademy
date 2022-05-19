<?php

namespace App\Http\Controllers\Admin\EducationalVideo;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EducationalVideo\StoreEducationalVideoRequest;
use App\Http\Requests\Admin\EducationalVideo\UpdateEducationalVideoRequest;
use App\Models\EducationalVideo\EducationalVideo;
use App\Models\Post\Post;
use App\Repositories\Admin\EducationalVideoRepository;

class EducationalVideoController extends Controller
{
    protected $educationalVideoRepository;

    public function __construct(EducationalVideoRepository $educationalVideoRepository)
    {
        $this->educationalVideoRepository = $educationalVideoRepository;
    }

    public function index()
    {

        $educationalvideos = $this->educationalVideoRepository->getLatest();
        return view('admin.educationalvideos.index', compact('educationalvideos'));

    }

    public function create()
    {

        return view('admin.educationalvideos.create');

    }

    public function store(StoreEducationalVideoRequest $request)
    {
        $category = $this->educationalVideoRepository->store($request);

        return redirect()->route('admin.educationalvideos.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(EducationalVideo $educational)
    {

        return view('admin.educationalvideos.edit', compact('educational'));
    }

    public function update(UpdateEducationalVideoRequest $request, EducationalVideo $educational)
    {
        $educationalVideos = $this->educationalVideoRepository->update($request, $educational);
        return redirect()->route('admin.educationalvideos.index');
    }

    public function destroy($id)
    {
        //
    }
}
