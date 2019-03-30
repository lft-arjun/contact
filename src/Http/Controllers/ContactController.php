<?php


namespace Dhanphe\Contact\Http\Controllers;


use App\Http\Controllers\Controller;
use Dhanphe\Contact\Mail\ContactMailable;
use Dhanphe\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        Mail::to(config('contact.send_email_to'))->send( new ContactMailable($request->message, $request->first_name . ' '. $request->last_name));
        Contact::create($request->all());

        return redirect(route('contact'));
    }
}