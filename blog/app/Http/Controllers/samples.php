<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\sample;

class samples extends Controller
{
    function list()
    {
      $data = sample::orderBy('name','desc')->get();

      return view('userview',['data'=>$data]);
    }
}
