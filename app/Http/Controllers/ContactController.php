<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\FormContactSubmitted;

class ContactController extends Controller
{
    //
    public function index() {
        $x = [
               'address1' => 'Jl Arjuna Utara No 35',
               'address2' => 'Jakarta Barat', 
               'phone' => [
                   '021 441 1060',
                   '021 440 7654',
               ],
               'email' => 'support@laravel.com',
               'website' => 'https://laravel.com',
        ];

        return view('contact', $x);
    }

    public function submit(Request $request){
       
        // Validation
        $validatedData = $request->validate([
            'email' => 'required|email|max:255',
            'topic' => 'required',
            'message' => 'required|min:10'
        ]);

        // dd( $request->all() );
        // Simpan ke database
        $obj = new \App\FormContact();
        $obj->email = $request->get('email');
        $obj->topic = $request->get('topic');
        $obj->message = $request->get('message');
        $obj->ip_address = $request->ip();
        $obj->save();    
            
        \Session::flash('success_message', 'Thank you we will contacting you soon' );

        $data = [
            'email' => $obj->email,
            'topic' => $obj->topic,
            'message' => $obj->message,
        ];
        
        \Mail::to( $obj->email )->send(new FormContactSubmitted($data));

        return redirect( route('contact') );
    }
}
