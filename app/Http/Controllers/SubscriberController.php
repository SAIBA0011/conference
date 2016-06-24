<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:subscribers',
            'phone' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        Subscriber::create($request->all());

        Mail::send('emails.thank_you', ['user' => $request], function ($m) use ($request) {
            $m->from('IAFEI@website.com', '46th IAFEI World Congress');

            $m->to($request->email, $request->first_name)->subject('46th IAFEI World Congress');
        });

        return 'ok';
    }

    public function getSubscribers()
    {
        $subscribers = Subscriber::all();
        return view('frontend.pages.subscribers', compact('subscribers'));

    }
}
