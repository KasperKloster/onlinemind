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

    public function pageWebudvikling(){
    	return view('webudvikling');
    }

    public function pageGrafiskDesign(){
    	return view('grafisk_design');
    }

    public function pageTekstforfatning(){
    	return view('tekstforfatning');
    }

    public function pageKontakt(){
    	return view('kontakt');
    }
}
