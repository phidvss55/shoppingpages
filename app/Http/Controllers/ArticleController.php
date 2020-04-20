<?php

namespace App\Http\Controllers;

use App\Model\Article;
use Illuminate\Http\Request;

class ArticleController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getListArticle() {
        $articles = Article::simplePaginate(3);
        return view('article.index', compact('articles'));
    }

    public function getDetailArticle(Request $request) {
        $arrayURL = (preg_split("/(-)/i", $request->segment(2)));
        $id = array_pop($arrayURL);
        if($id) {
            $articleDetail = Article::find($id);
            $articles = Article::paginate(10);

            $viewData = [
                'articles'  => $articles,
                'articleDetail'  => $articleDetail
            ];
            return view('article.detail', $viewData);
        }
        return redirect('/');
    }
}
