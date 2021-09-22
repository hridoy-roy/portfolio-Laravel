<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return View('frontend.about');
    }
}
