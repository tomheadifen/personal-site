<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $stackOverFlowData = Cache::remember('stack_overflow_data', 86400, function() {
            $data = Http::get('https://api.stackexchange.com/2.3/users/4371791?order=desc&sort=reputation&site=stackoverflow');
            return $data->json();
        });

        return Inertia::render('Home', ['stackOverFlowData' => $stackOverFlowData]);
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'firstName' => 'required|max:500',
            'lastName' => 'required|max:500',
            'email' => 'required|max:500',
            'phone' => 'numeric|digits_between:7,15',
            'subject' => 'required|max:500',
            'message' => 'required|max:500',
        ]);

        Mail::to(config('mail.contact_form_to_address'))->send(new ContactForm($request->all()));

        return redirect('/');
    }
}
