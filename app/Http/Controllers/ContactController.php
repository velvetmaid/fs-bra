<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all();
        return view('controls.admins.index-contact', compact('contact'));
    }

    public function indexContact()
    {
        $title = 'Contact Us';
        $contact = Contact::all();
        $about = About::all();
        return View::make('contact-us')
            ->with('title', $title)
            ->with(compact('contact', 'about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        return View('controls.admins.update-contact', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'no_hp' => 'required',
            'instagram' => 'required',
            'facebook' => 'required',
            'email' => 'required',
            'location' => 'required',
        ]);
        $contact = Contact::find($id);
        $contact->no_hp = $request->no_hp;
        $contact->instagram = $request->instagram;
        $contact->facebook = $request->facebook;
        $contact->email = $request->email;
        $contact->location = $request->location;
        $contact->save();
        return redirect('contact')->with('updateAlert', 'Great! Properties has been successfully uptodate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
