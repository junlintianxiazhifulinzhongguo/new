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
    public function j()
    {
        return view();
    }
    public function tt()
    {
        $this->view->engine->layout(true);
        return view();
    }
    public function ttt()
    {
        return view();
    }
    public function te()
    {
        return view();
    }
    public function t()
    {
        $data='{
    "code": "0",
    "data": [
        {
            "StaffName": "kagula",
            "deviceIndex": "0",
            "eventTime": "2017-01-21 07:01:37",
            "idWarningInfo": "1",
            "portIndex": "0",
            "warningType": "0"
        },
        {
            "StaffName": "kagula",
            "deviceIndex": "0",
            "eventTime": "2017-01-21 07:01:48",
            "idWarningInfo": "2",
            "portIndex": "1",
            "warningType": "0"
        },
        {
            "StaffName": "kagula",
            "deviceIndex": "1",
            "eventTime": "2017-01-21 07:02:16",
            "idWarningInfo": "3",
            "portIndex": "0",
            "warningType": "0"
        },
        {
            "StaffName": "kagula",
            "deviceIndex": "1",
            "eventTime": "2017-01-21 07:02:16",
            "idWarningInfo": "4",
            "portIndex": "1",
            "warningType": "0"
        },
        {
            "StaffName": "",
            "deviceIndex": "1",
            "eventTime": "2017-02-04 01:03:33",
            "idWarningInfo": "5",
            "portIndex": "1",
            "warningType": "0"
        },
        {
            "StaffName": "",
            "deviceIndex": "1",
            "eventTime": "2017-02-04 05:46:49",
            "idWarningInfo": "6",
            "portIndex": "1",
            "warningType": "1"
        },
        {
            "StaffName": "",
            "deviceIndex": "1",
            "eventTime": "2017-02-04 05:46:59",
            "idWarningInfo": "7",
            "portIndex": "1",
            "warningType": "2"
        },
        {
            "StaffName": "",
            "deviceIndex": "1",
            "eventTime": "2017-02-04 05:46:59",
            "idWarningInfo": "8",
            "portIndex": "1",
            "warningType": "2"
        }
    ],
    "iTotalDisplayRecords": "100",
    "iTotalRecords": "100",
    "message": "success"
}';

      return  $data;
    }


public function getData()
{
    $dataTables=request()->post();
    //print_r($dataTables);
    $surname=model('Surname');
    $result=$surname->getSurname($dataTables['start'],$dataTables['length']);
    $data=[
        "code"=> 0,
        "draw" => intval($dataTables['draw']),
        "recordsFiltered"=>120,
        "recordsTotal"=> 130,
        "message"=> "success",
        "data" => $result
    ];
    return json($data);
}



}



