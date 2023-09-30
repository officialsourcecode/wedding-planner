<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact-us');
    } 

    public function query(Request $request)
    {
        //dd($request->name);exit;
        $adminEmail = "kajalsingh0594@gmail.com";

        Mail::to($adminEmail)->send(new ContactMail($request->all()));

        $notification = array(
            'message' => 'Thank you for contact us. we will contact you shortly.', 
            'alert-type' => 'success'
         );

        //return redirect()->back()->with($notification);

        return redirect()->back()
                        ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }
}
