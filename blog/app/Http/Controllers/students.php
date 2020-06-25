<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\student;

class students extends Controller
{
    function save(Request $req)
    {
    $student = new student();
    $student->name=$req->name;
    $student->address=$req->address;
    $student->phone=$req->phone;
    $student->phone=$req->phone;
    $student->image=$req->image;
    student::where('name','payal')->update(['address'=>'panchwati']);
    student::destroy([3,4]);

    echo $student->save();
    }
}
