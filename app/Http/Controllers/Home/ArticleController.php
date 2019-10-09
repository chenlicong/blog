<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article as ArticleModel;

class ArticleController extends Controller
{
    /**
     *文章首页页面
     *
     * @param  \Illuminate\Http\Request  $request
     * @return null
     */
    public function index() {
        $articles = ArticleModel::all();
        $data = [];
        return view('home.article.index', compact('data', $data));
    }

    /**
     * 文章详情页面
     *
     * @param  \Illuminate\Http\Request  $request
     * @return null
     */
    public function detail() {
        return view('home.article.detail');
    }
}
