<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ajax;

class AjaxController extends Controller
{
    public function index()
    {
        return view('ajax');
    }

public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        Ajax::create($request->all());
        return json_encode(array(
            "statusCode"=>200
        ));
    }
}
