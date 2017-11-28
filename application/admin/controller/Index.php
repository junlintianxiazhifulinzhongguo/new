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
    public function ss()
    {
        return view();
    }
    public function sste()
    {




        $a='{
        "code": "0",
  "data": [
    {
      "DT_RowId": "row_1",
      "first_name": "Tiger",
      "last_name": "Nixon",
      "position": "System Architect",
      "email": "t.nixon@datatables.net",
      "office": "Edinburgh",
      "extn": "5421",
      "age": "61",
      "salary": "320800",
      "start_date": "2011-04-25"
    }
  ],
  "options": [],
  "files": [],
  "iTotalDisplayRecords": "100",
  "iTotalRecords": "100",
  "message": "success"
}';
        return  $a;
    }

public function sse()
{
    $dataTables=request()->post();
   // return $dataTables;
    print_r($dataTables);
}

    public function se()
    {
        return view();
    }
    public function ff()
    {
        return view();
    }

    public function pt()
    {
        $dataTables=request()->post();
        // return $dataTables;
        print_r($dataTables);
    }

}



