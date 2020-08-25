<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Contact;
use App\User;
use App\Purchase;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin'); 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countContacts = Contact::where('admin_id', Auth::user()->id)->count();
        $countUsers = User::where('admin_id', Auth::user()->id)->count();
        $countPurchases = Purchase::where('admin_id', Auth::user()->id)->count();

        return view('admin.index', [
            'contacts' => $countContacts, 
            'users' => $countUsers,
            'purchases' => $countPurchases,
        ]);
    }
}
