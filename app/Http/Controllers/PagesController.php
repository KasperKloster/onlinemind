<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;

use Newsletter;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

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

    public function postContact(Request $request){
        // Validation
        $this->validate($request, [
            'name'              => 'required|min:2',
            'email'             => 'required|email',
            'phone'             => 'numeric|nullable',
            'message'           => 'min:5',
            'contactFormType'   => 'min:3|max:20|required'
        ]);

        $data = array(
            'name'              =>  $request->name,
            'email'             =>  $request->email,
            'phone'             =>  $request->phone,
            'bodyMessage'       =>  $request->message,
            'contactFormType'   =>  $request->contactFormType  
        );

        Mail::send('emails.contact', $data,  function($message) use ($data){
            $message->from($data['email']);
            $message->to('kasper@onlinemind.dk');
            $message->subject('Besked fra Onlinemind');
        });

        Session::flash('success', 'Tak for din henvendelse!');
        return redirect()->back();
    }

    public function postNewsletter(Request $request)
    {
        $this->validate($request, [
            'newsletterName'        => 'required|min:2',
            'newsletterEmail'       => 'required|email'
        ]);

        // Checks if already subscribed
        if (!Newsletter::isSubscribed($request->newsletterEmail)) 
        {
            // Else send conirm mail to user and subscribe to mailchimp Lists
            Newsletter::subscribePending($request->newsletterEmail, ['FNAME' => $request->newsletterName]);
            Session::flash('newsletterSuccess', 'Tak - Du er tilmeldt! Jeg har sendt dig en bekræftelsesmail.');
            return Redirect::to(URL::previous() . "#footer-newsletter-msg");
        } 
        // If already subscribed return this message
        else
        {
            Session::flash('newsletterError', 'Tak, men du er allerede tilmeldt nyhedsbrevet.');
            return Redirect::to(URL::previous() . "#footer-newsletter-msg");
        }

    }

}
