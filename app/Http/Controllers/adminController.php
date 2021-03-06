<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('isAdmin');
        $this->middleware('auth');
    }

    public function Index()
    {
        $user = Auth::user();
        return 'Welcome Mr.' . $user->name . ' Your ID : ' . $user->id;
    }
}
