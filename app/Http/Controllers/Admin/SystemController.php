<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * 商家后台首页
     *
     * @param  \Illuminate\Http\Request  $request
     * @return null
     */
    public function index() {
        return view('seller.index');
    }
}
