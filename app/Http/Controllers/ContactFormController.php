<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{

    public function send(ContactRequest $req)
    {
        $data = $req->all();
        Mail::to('bookstore@bookstore.com')->send(new ContactFormMail($data));

        if (Mail::failures()) {
            $email = false;
            return redirect()->back()->with(['email' => $email]);
        }

        $email = true;
        return redirect()->back()->with(['email' => $email]);
    }
}
