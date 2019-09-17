<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\giay;
use DB;

class giayController extends Controller
{
    //
    public function themgiay(Request $request){

        $name = time() . $request->image->getClientOriginalName();
        $request->image->move(public_path('images'), $name);

        // dd($request->image->getClientOriginalName());
        
        $data = new giay;
        $data->Shoes_name           = $request->name;
        $data->Column               = 1;
        $data->Shoes_description    = 0;
        $data->Shoes_size           = 0;
        $data->Shoes_color          = 0;
        $data->Shoes_image          = 'images/'.$name;
        $data->Shoes_prices         = $request->prices;
        $data->Shoes_sale           = 0;
        $data->Shoes_code           = 0;
        $data->Format               = 1;
        $data->save();

        return redirect()->Route('adminallitem');
    }
    public function getall(){

        $data = giay::paginate(12);
        // dd($data);
        return view('admin.allitem2', compact('data'));
    }

    public function admin_search_item(Request $request){
        if ($request->format == 0) {
            $data = giay::paginate(12);
            return view('admin.allitem2', compact('data'));
        }else{
            $data = DB::table('giay')->where('Format', $request->format)->paginate(12);
            return view('admin.allitem2', compact('data'));
        }
    }
}
