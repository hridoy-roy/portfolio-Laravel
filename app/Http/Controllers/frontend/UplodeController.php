<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UplodeController extends Controller
{
    public function index(){
        return View('frontend.uplode');
    }
    public function store(Request $request){
        $filename = time() . "-roy." . $request->file('file')->getClientOriginalExtension();
        // echo  $filename;
        // dd();
        echo $request->file('file')->storeAs('uplode',$filename);
    }
}
