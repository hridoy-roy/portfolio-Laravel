<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class servicesController extends Controller
{
    public function index(){
        return View('frontend.services');
    }
}
