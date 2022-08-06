<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Repeater;
use Session;

class ChildinfoController extends Controller
{
    public function childInfo(Request $request){
        $name = $request->name;
        $birth = $request->birth;
        $age = $request->age;
        $child_blood = $request->child_blood;

        for($i=0; $i < count($name); $i++){
            $datasave = [

                'army_no' => 1,
                'child_name' => $name[$i],
                'child_dob' => $birth[$i],
                'child_age' => $age[$i],
                'child_blood' => $child_blood[$i],

            ];

            DB::table('childinfos')->insert($datasave);
        }

        Session::put('success', "Data Save Successfully...!");
        return back();
    }

    public function viewChildInfo(){
        $childinfos = Repeater::all();
        return view('child_infos', compact('childinfos'));
    }
}
