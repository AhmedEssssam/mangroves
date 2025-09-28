<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'project_type' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Mail::to('ahmedhsoub@gmail.com')->send(new ContactFormMail($data));
        // dd("done");
        return redirect('/#contact')->with('success', 'Your message has been sent!');
    }
}
