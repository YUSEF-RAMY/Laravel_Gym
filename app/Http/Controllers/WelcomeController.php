<?php

namespace App\Http\Controllers;
use App\Models\Captain;
use App\Models\Contact;

use Illuminate\Http\Request;


class WelcomeController extends Controller
{
    public function index()
    {
        $captain = Captain::all();
        $comments = Contact::latest()->take(5)->get();
        return view('welcome' , compact('captain' , 'comments'));
    }
    

    public function ourTeam()
    {
        $captains = Captain::all();
        return view('pages.ourTeam' , compact('captains'));
    }

    public function masterData()
    {
        $comments = Contact::latest()->take(5)->get();
        return view('layouts.master' , compact('comments'));
    }
}
