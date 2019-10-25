<?php

namespace App\Services;
use App\Models\MyFirst;
use Exception;

class MyService extends BaseService
{
    private $myFirstModel;

    public function __construct(MyFirst $myFirst)
    {
        $this->myFirstModel = $myFirst;
    }

    public function index()
    {
        $datas = $this->myFirstModel->orderBy('id','desc')->get();
        return $datas;
    }

    public function show($id)
    {
        $action_info = $this->myFirstModel->where('id', $id)->get();
        //判断是否存在这个行为
        if (!$action_info) {
            throw new Exception(" wrong url!!!");
        }
        return $action_info;
    }

}