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
}
