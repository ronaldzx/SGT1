<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function inicio(){
        return view('sgt_menu');
    }
}
