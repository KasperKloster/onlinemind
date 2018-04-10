<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;

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

    public function postKontakt(Request $request){
        // Validation
        $this->validate($request, [
            'name'      => 'required|min:2',
            'email'     => 'required|email',
            'message'   => 'min:10'
        ]);

        $data = array(
            'name'          =>   $request->name,
            'email'         =>   $request->email,
            'phone'         =>   $request->phone,
            'bodyMessage'   =>   $request->message   
        );

        Mail::send('emails.contact', $data,  function($message) use ($data){
            $message->from($data['email']);
            $message->to('mig@kasperkloster.dk');
            $message->subject('Besked fra Onlinemind');
        });

        Session::flash('success', 'Tak for din henvendelse!');
        return redirect('kontakt');
    }
}