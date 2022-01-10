<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Send a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        $contact = new Contact();
        $contact->name =  $request->name;
        $contact->email =  $request->email;
        $contact->mobile =  $request->mobile;
        $contact->message =  $request->message;
        $contact->save();

        $to = Setting::get('email');

        Mail::to($to)->send(new ContactMail($contact));
        return back();
    }
}
