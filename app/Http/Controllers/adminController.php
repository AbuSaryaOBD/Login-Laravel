<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('isAdmin');
    }

    public function Index()
    {
        return 'Welcome root';
    }
}
