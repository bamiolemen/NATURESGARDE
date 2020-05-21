<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Category;
use Cart;
use Mail;

class ContactController extends Controller
{
    public function getContact() {
        return view('contact_us')
                ->with('categories', Category::all());
    }
        
    public function saveContact(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->lname = $request->lname;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        \Mail::send('contact_email',
            array(
            'name' => $request->get('name'),
            'lname' => $request->get('lname'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
        ), function($message) use ($request)
        {
        $message->from($request->email);
        $message->to('blessingamiolemen@gmail.com');
        });

        Sesssion::flash('success', 'We will receive your email soon');
        return redirect()->back();
    }
}
