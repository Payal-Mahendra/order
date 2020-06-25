<?php

namespace App\Http\Controllers;
use App\Event\UserCreated;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    //
    function index()
    {
        event(new UserCreated('email has been send'));
    }
}
