<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     * عرض كل الرسايل في الداش بورد
     */ 
    public function index()
    {
        $comments = Contact::latest()->paginate(10);
        return view('pages.contactus' , compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'phone' => 'required|string|max:11',
            'email' => 'email|max:255',
            'comment' => 'required|string',
        ]);
        Contact::create($request->only(['name' , 'phone' , 'email' , 'comment']));
        return redirect()->back()->with('success' , 'شكرا علي رايك');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
