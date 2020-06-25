<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\sample;

class users extends Controller
{
    function list()
    {
        return sample::all();
    }
}
