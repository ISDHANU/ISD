<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\giay;
use DB;

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
    public function index()
    {
        $data = giay::paginate(10);
        // dd($data);
        return view('admin.allitem2', compact('data'));
        // return view('admin.allitem');
    }
}
