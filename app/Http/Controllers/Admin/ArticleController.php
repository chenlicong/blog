<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * 商家后台文章管理
     *
     * @param  \Illuminate\Http\Request  $request
     * @return null
     */
    public function index() {
        return view('admin.article.index');
    }

    /**
     * 商家后台文章添加
     *
     * @param  \Illuminate\Http\Request  $request
     * @return null
     */
    public function add() {
        return view('admin.article.add');
    }

    /**
     * 商家后台文章编辑
     *
     * @param  \Illuminate\Http\Request  $request
     * @return null
     */
    public function edit() {
        return view('admin.article.edit');
    }

    /**
     * 商家后台文章删除
     *
     * @param  \Illuminate\Http\Request  $request
     * @return null
     */
    public function del() {
        return null;
    }
}
