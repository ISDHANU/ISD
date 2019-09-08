<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('user.index');
    }
    public function checkout(){
        return view('user.checkout');
    }
    public function product(){
        return view('user.product');
    }
    public function allitem(){
        return view('user.allitem');
    }
    public function admin(){
        return view('admin.allitem');
    }
    public function adminadditem(){
        return view('admin.adminadditem');
    }
}
