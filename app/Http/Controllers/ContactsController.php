<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Mail;

class ContactsController extends Controller
{

    public function contact() {
        return view('pages.contact');
    }
    
    public function storeContact(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required | email',
            'subject' => 'required',
            'message' => 'required'
        ], $messages = [
            'name.required' => 'Molimo unesite Vaše ime!',
            'email.required' => 'Molimo unesite Vašu e-mail adresu!',
            'email.email' => 'Molimo unesite ispravnu e-mail adresu!',
            'subject.required' => 'Molimo unesite naslov poruke!',
            'message.required' => 'Molimo unesite poruku!'
        ]);

        Mail::send('emails.contact-message', [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'phone_number' => $request->get('phone-number'),
            'user_message' => $request->get('message')
        ], function ($message) use ($request) {
            $message->from($request->email, $request->name);
            $message->to('beastmb@gmail.com')->subject($request->subject);
        });

        return redirect()->back()->with('flash_message', 'Hvala što ste nas kontaktirali!');
    }
}
