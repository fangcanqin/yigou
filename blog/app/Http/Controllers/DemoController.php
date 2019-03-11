<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //前台页面样式js测试
    public function index()
    {
        return view('home.address');
    }
}
