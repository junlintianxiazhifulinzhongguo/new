<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/6 0006
 * Time: 下午 1:56
 */


namespace app\admin\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        $this->view->engine->layout(true);
        return view();
    }
    public function test()
    {
        return view();
    }
    public function tt()
    {
        $this->view->engine->layout(true);
        return view();
    }
}