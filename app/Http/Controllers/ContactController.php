<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function contactpage()
    {
        return view('contactpage');
    }

    public function registerContact(Request $request){
    $request->validate([
        'first_name'=>'required',
        'last_name'=>'required',
        'email'=>'required|email',
        'message'=>'required|min:30' 
    ]);

    $contact = new Contact();
    $contact->first_name=$request->first_name;
    $contact->last_name=$request->last_name;
    $contact->email=$request->email;
    $contact->message=$request->message;
    $res=$contact->save();
    if($res){
        return redirect()->route("contact")->withSuccess("Your Message Sent Seccessfully");
    }
}
}
