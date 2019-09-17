<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\giay;
use DB;

class IndexController extends Controller
{
    public function index(){

        $data = DB::table('giay')->limit(8)->get();
        return view('user.index', compact('data'));
    }
    public function checkout($id){
        $data = DB::table('giay')->where('Shoes_id', $id)->first();
        return view('user.checkout', compact('data'));
    }
    public function product($id){
        $data = DB::table('giay')->where('Shoes_id', $id)->first();
        $thesame = DB::table('giay')->where('Format', 2)->limit(8)->get();
        // dd($data);
        return view('user.product', compact('data','thesame'));
    }

    public function user_search_item(Request $request){
        if ($request->format == 0) {
            $data =  giay::paginate(16);
            return view('user.allitem', compact('data'));
        }else{
            $data = DB::table('giay')->where('Format', $request->format)->paginate(16);
            return view('user.allitem', compact('data'));
        }
    }

    public function allitem(){
            $data = giay::paginate(16);
            return view('user.allitem', compact('data'));
    }



    public function admin(){
        return view('admin.allitem');

    }
    public function overview(){
        return view('admin.overview');
    }
    public function logout(){
        Auth::logout();
        return redirect('/home');
    }
    public function adminadditem(){
        return view('admin.adminadditem');
    }
}
