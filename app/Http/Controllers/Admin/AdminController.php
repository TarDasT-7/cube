<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.partials.index') ;
    }
}
