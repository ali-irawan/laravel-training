<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
