<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\ContactForm;
use App\Models\Sujet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sujets = Sujet::all();
        return view('pages.contact', compact('sujets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $store = new ContactForm();
        // $store->name = $request->name;
        // $store->email = $request->email;
        // $store->title = $request->title;
        // $store->message = $request->message;
        // $store->save();

        // $data = $store;

        $data = [
            "name" => $request->name,
            "email" => Auth::user()->email,
            "title" => $request->title,
            "message" => $request->message,
            "sujet" => Sujet::find($request->sujet)->sujet,
        ];

        Mail::to('gogolus2000@gmail.com')->send(new WelcomeMail($data));
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function show(ContactForm $contactForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactForm $contactForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactForm $contactForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactForm $contactForm)
    {
        //
    }
}
