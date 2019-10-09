<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * 前台页面
     *
     * @param  \Illuminate\Http\Request  $request
     * @return null
     */
    public function index() {
        $data['page_action'] = 'index';
        return view('home.index', compact('data', $data));
    }
}
