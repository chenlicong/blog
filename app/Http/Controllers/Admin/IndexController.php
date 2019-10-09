<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * 后台首页
     *
     * @param  \Illuminate\Http\Request  $request
     * @return null
     */
    public function index() {
        $data['page_action'] = 'index';
        return view('admin.index', compact('data', $data));
    }
}
