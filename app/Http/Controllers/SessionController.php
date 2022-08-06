<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sessiondata;
use Illuminate\Support\Facades\Session;


class SessionController extends Controller
{
    public function sessionPage(){
        return view('session.add_data');
    }

    public function storeData(Request $request){
            if(!empty($request->name && $request->email)){
                session(['name' => $request->name, 'email' => $request->email]);
                return redirect()->back();
            }
            else{
                return redirect()->back()->with('error', 'Something Went Wrong');
            }
    }

    public function getData(){
        $store = Sessiondata::create([
        'name' => Session::get('name'),
        'email' => Session::get('email'),
        ]);
        return redirect()->back();
    }
}
