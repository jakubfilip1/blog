<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $articles = Article::query()->orderBy('created_at', 'DESC')->take(5)->get();

       return view('home', [
           'articles' => $articles
       ]);
    }

    public function article(int $id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $article = Article::all()->find($id);

        $comments = Comment::query()->where('article_id', '=', $id)->orderBy('created_at', 'DESC')->get();

        return view('article', [
            'article' => $article,
            'comments' => $comments
        ]);
    }

    public function addArticle(): mixed
    {
        if(!session('admin_login'))
        {
            return redirect()->route('home');
        }

        return view('addArticle');
    }

    public function articleDelete($id): \Illuminate\Http\RedirectResponse
    {
        if(!session('admin_login'))
        {
            return redirect()->route('home');
        }

        Article::query()->where('id', '=', $id)->delete();

        return redirect()->route('home');
    }

    public function addArticlePost(Request $request): \Illuminate\Http\RedirectResponse
    {
        if(!session('admin_login'))
        {
            return redirect()->route('home');
        }

        $model = Article::query()->create([
           'title' => $request->get('title'),
           'content' => $request->get('message')
        ]);

        return redirect()->route('article', [
            'id' => $model->id
        ]);
    }
}
