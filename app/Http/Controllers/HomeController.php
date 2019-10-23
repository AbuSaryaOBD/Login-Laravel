<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // $request->session()->reflash();
        // $request->session()->keep('message');


        // $request->session()->flash('message','Post has been created');
        return $request->session()->get('message');


        // $request->session()->forget('edwin');
        // $request->session()->flush();
        // return $request->session()->all();


        // session(['peter'=>'student']);
        // session(['edwin'=>'laravel teacher']);
        // return session('edwin');

        // $request->session()->put(['edwin' => 'Stupid instructor']);
        // return $request->session()->all();


        
        // return view('home');

        // $user = Auth::user();
        // return view('home', compact('user'));
    }
}
