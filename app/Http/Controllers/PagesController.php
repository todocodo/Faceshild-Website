<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Client as HttpClient;
use illuminate\Http\Request;


// use App\Http\Requests;
// use App\Post;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use PharIo\Manifest\Email;
use GuzzleHttp\Client;
use App\Http\Requests\StoreBlogPostRequest;

class PagesController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function certificate()
    {
        return view('pages.certificate');
    }

    public function goal()
    {
        return view('pages.goal');
    }

    public function order()
    {
        return view('pages.order');
    }

    public function custom()
    {
        return view('pages.custom');
    }

    public function packing()
    {
        return view('pages.packing');
    }

    public function demos()
    {
        return view('pages.demos');
    }

    public function contacts()
    {
        return view('pages.contacts');
    }

    public function test()
    {
        return view('pages.test');
    }

    public function products()
    {
        return view('pages.products');
    }

    public function product()
    {
        return view('pages.product');
    }

    public function cart()
    {
        return view('pages.cart');
    }

    public function checkout()
    {
        return view('pages.checkout');
    }

    public function postContact()
    {
        request()->validate([
            'name' => 'required',
            'phone' => 'required | numeric',
            'email' => 'required | email',
            'subject' => 'required | max:100',
            'message' => 'required | min:5'
        ]);

        $token = request()->input('g-recaptcha-response');
        // dd($token);
        if ($token) {
            $client = new Client();
            $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
                'form_params' => array(
                    'secret' => '6LfMFMQZAAAAAGn_rUWR7QCponC8lSUGwW-IEk4J',
                    'response' => $token
                )
            ]);
            $result = json_decode($response->getBody()->getContents());

            if ($result->success) {
                // dd($result);
                Session::flash('success', 'Yes we know you are human');
            } else {
                Session::flash('error', 'You are a Robot!');
                return redirect('/');
            }
        } else {
            Session::flash('error', 'Please tick the box');
        }
        // dd(request()->subject);
        Mail::send(new \App\Mail\ContactMail());
        // echo 'successful sent email!';
        Session::flash('success', 'Your Email was Sent!');

        return redirect('/contacts');
    }
}
