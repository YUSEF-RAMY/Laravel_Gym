<?php

namespace App\Http\Controllers;
use App\Models\Captain;

use Illuminate\Http\Request;


class WelcomeController extends Controller
{
    public function index()
    {
        $captain = Captain::all();
        return view('welcome' , compact('captain'));
    }
    

    public function ourTeam()
    {
        $captains = Captain::all();
        return view('pages.ourTeam' , compact('captains'));
    }
}
