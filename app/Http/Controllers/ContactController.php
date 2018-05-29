<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    public function create()
    {
    	return view('contacts.create');
    }

    public function store(ContactRequest $request)
    {

        $message = new Message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message ;

        $message->save();
    	$mailable = new ContactMessageCreated($message);
 
    	Mail::to(config('laracarte.admin_support_email'))->send($mailable);

    	    flashy('Nous vous repondrons dans les plus bref delais');

            return redirect()->route('root_path');
    }
}
