<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\registration;

class art extends Controller
{
    function show()
    {
        return view('about');
    }
    function list()
    {
        return view('contact');
    }
    function user()
    {
        return view('login');
    }
    function historicals()
    {
        return view('historical');
    }
    function fashions()
    {
        return view('fashion');
    }
    function natures()
    {
        return view('nature');
    }
    function try()
    {
        return view('register');
    }
    function register(Request $req)
    {
       $registration= new registration;
       $registration->First_name=$req->First_name;
       $registration->Last_name=$req->Last_name;
       $registration->Age=$req->Age;
       $registration->Gender=$req->Gender;
       $registration->Email=$req->Email;
       $registration->Password=$req->Password;
       $result=$registration->save();
       if($result)
       {
       return redirect('login');
       }
    }
    function login(Request $req)
    {
        register::select('*')->where(
            [
                ['Email','*',$req->Email],
                ['Password','*',$req->Password],
            ]
        )->get();
        $req->session()->put('login', [$req->input()]);
        
    }
}
