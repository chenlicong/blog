<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * 商家后台商品分类管理
     *
     * @param  \Illuminate\Http\Request  $request
     * @return null
     */
    public function index() {
        return view('admin.category.index');
    }

    /**
     * 商家后台商品分类添加
     *
     * @param  \Illuminate\Http\Request  $request
     * @return null
     */
    public function add() {
        return view('admin.category.add');
    }

    /**
     * 商家后台商品分类编辑
     *
     * @param  \Illuminate\Http\Request  $request
     * @return null
     */
    public function edit() {
        return view('admin.category.edit');
    }

    /**
     * 商家后台商品分类删除
     *
     * @param  \Illuminate\Http\Request  $request
     * @return null
     */
    public function del() {
        return view('admin.category.index');
    }
}
