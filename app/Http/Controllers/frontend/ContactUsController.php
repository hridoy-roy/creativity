<?php

namespace App\Http\Controllers\frontend;

use App\Mail\ContactMail;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function contactSend(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|string|email|max:255|email_checker',
            'subject' => 'required',
            'message' => 'required',
            
        ]);

        $contact = new ContactUs();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        // Mail::to("azhar.womenindigital@gmail.com")->send(new ContactMail($contact));
        notify()->success("Contact","Contact Successfull");
        return redirect()->back();

    }
}
