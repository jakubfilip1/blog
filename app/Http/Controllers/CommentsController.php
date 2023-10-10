<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class CommentsController extends BaseController
{
    public function index(Request $request): \Illuminate\Http\RedirectResponse
    {
        Comment::query()->create([
            'article_id' => $request->get('articleId'),
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'message' => $request->get('message')
        ]);

        return redirect()->back();
    }
}
