<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * 商家后台登录页面
     *
     * @param  \Illuminate\Http\Request  $request
     * @return null
     */
    public function index() {
        return view('admin.login');
    }
}
