<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
//        dd('后台首页，当前管理员：' . auth('admin')->user()->name);  // 打印当前登录的用户信息
        return view('admin.home');
    }
}
