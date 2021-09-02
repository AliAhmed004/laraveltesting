<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummApi extends Controller
{
    function getdata()
    {
       return ['name'=>'Ali'];
    }
}
