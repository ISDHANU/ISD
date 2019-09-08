<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\giay;

class giayController extends Controller
{
    //
    public function themgiay(Request $request){
        $data = new giay;
        $data->ma      	= $request->ma;
        $data->ten      = $request->ten;
        $data->giatien  = $request->giatien;
        $data->giamgia  = 0;
        $data->hinhanh  = 0;
        $data->kieu     = 0;
        $data->save();

        return redirect()->Route('adminadditem');
    }
    public function getall(){

        $data = giay::all();
        // dd($data);
        return view('admin.allitem', compact('data'));

    }
}
