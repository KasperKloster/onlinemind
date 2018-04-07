<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function pageFront(){
        return view('front');
    }

    public function pageSEO(){
    	return view('seo');
    }
}
