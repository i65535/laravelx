<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * 显示指定用户的个人信息
     * 
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        return view('index');
    }
}