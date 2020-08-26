<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;


// use App\Http\Requests;
// use App\Post;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use PharIo\Manifest\Email;

class PagesController extends Controller
{
    public function about() {
        return view('pages.about');
    }

    public function certificate() {
        return view('pages.certificate');
    }

    public function goal() {
        return view('pages.goal');
    }

    public function order() {
        return view('pages.order');
    }

    public function custom() {
        return view('pages.custom');
    }

    public function demos() {
        return view('pages.demos');
    }

    public function contacts() {
        return view('pages.contacts');
    }

    public function orders() {
        dd(request()->all());
    }

    public function postContact() {
        //$this->validate($request, ['email' => 'required|email','subject' => 'min:3','message' => 'min:5']);

        // dd(request()->subject);
        Mail::send(new \App\Mail\ContactMail());
        // echo 'successful sent email!';
        Session::flash('success', 'Your Email was Sent!');

        return redirect('/contacts');
    }
}
