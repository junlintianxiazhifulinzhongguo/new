<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/6 0006
 * Time: 下午 1:56
 */

namespace app\admin\controller;
use think\Controller;
class Surname extends Controller
{
    public function index()
    {
        $this->view->engine->layout(true);
        return view();
    }
    public function a()
    {
        return view();
    }
    public function b()
    {
        return view();
    }
    public function c()
    {
        return view();
    }
    public function d()
    {
        return view();
    }
    public function e()
    {
        return view();
    }
    public function f()
    {
        return view();
    }
    public function getData()
{
    $dataTables=request()->post();
//    print_r($dataTables);
//
//    foreach ($dataTables['columns'] as $key=>$val)
//    {
//        print_r($val['orderable']);
//
//    }

//        print_r($dataTables['order'][0]['column']);
//        print_r($dataTables['order'][0]['dir']);
        $column=$dataTables['order'][0]['column'];
        $dir=$dataTables['order'][0]['dir'];
        $order = [
            $dataTables['columns'][$column]['data']=> $dir,
        ];
        $search=$dataTables['search']['value'];
      //  print_r($search);
    $surname=model('Surname');
    $result=$surname->getSurname($search,$order,$dataTables['start'],$dataTables['length']);
    $data=[
        "code"=> 0,
        "draw" => intval($dataTables['draw']),
        "recordsFiltered"=>$surname->count(),
        "recordsTotal"=>$surname->count(),
        "message"=> "success",
        "data" => $result
    ];
    return json($data);
}
    public function g()
    {
        return view();
    }
    public function h()
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

public function i()
{
    $dataTables=request()->post();
   // return $dataTables;
    print_r($dataTables);
}

    public function j()
    {
        return view();
    }
    public function k()
    {
        return view();
    }

    public function pt()
    {
        $dataTables=request()->post();
        $data=$dataTables["data"];
        $id_key=array_keys($data);
        $id=$id_key[0];
        $field_key=array_keys($data[$id]);
        $field=$field_key[0];
        $field_val=$data[$id][$field];
        $surname=model('Surname');
        $surname->save([$field=>$field_val],['id' => $id]);
        $user = $surname->get($id);
        $data=[
            "id"=>$id,
            "code"=> "1",
            "message"=>"编辑成功",
            "data" => $user
        ];
        return json($data);
    }
    public function ee()
    {
        return view();
    }
}



