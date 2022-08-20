<?php

namespace App\Http\Controllers\Site\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\Comment\StoreCommentRequest;
use App\Repositories\Site\CommentRepository;

class CommentController extends Controller
{
    protected $commentRepository;

    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function store(StoreCommentRequest $request)
    {
       $comment = $this->commentRepository->store($request);
        return redirect()->back();
    }

    public function reply(StoreCommentRequest $request)
    {
        $comment = $this->commentRepository->store($request);
        return redirect()->back();
    }

}
