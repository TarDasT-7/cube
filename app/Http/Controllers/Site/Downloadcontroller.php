<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Downloadcontroller extends Controller
{
    public function download($name)
    {
       $file='files/'.$name;

       return \Illuminate\Support\Facades\Response::download($file);
    }
}
