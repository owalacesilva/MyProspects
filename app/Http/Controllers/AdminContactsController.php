<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminContactsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
<<<<<<< HEAD
        $contacts = \App\Contact::where('admin_id', Auth::user()->id)
               ->orderBy('created_at', 'desc')
               ->get();
        return view('admin.contacts', ['contacts' => $contacts]);
=======
        return view('admin.contacts');
>>>>>>> f32fe3f038e7de3f2ebdbe3e740c0e72cd3c68cd
    }
}
