<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MyService;

class myController extends Controller
{
    private $myService;

    public function __construct(MyService $myService)
    {
        $this->myService = $myService;
    }

    public function index()
    {
        $datas = $this->myService->index();
        return view('Client/myFirst',compact('datas'));
        //dd($datas);
    }

    protected function show($id)
    {
        $datas = $this->myService->show($id);
        return view('Client/myFirst',compact('datas'));
        //dd($datas);
    }
}
