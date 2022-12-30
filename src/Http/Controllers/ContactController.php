<?php

namespace Amirjavadikia\Contact\Http\Controllers;


;
use Amirjavadikia\Contact\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
//        Mail::to('amir.m.javadikia@gmail.com')->send(new ContactMailable($request->message));
        Contact::create($request->all());
        return redirect()->back();
    }
}
