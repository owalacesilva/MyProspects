<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Contact;

class UserContactsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contacts = DB::table('purchases')
                ->leftJoin('users', 'purchases.user_id', '=', 'users.id')
                ->leftJoin('purchase_contacts', 'purchases.id', '=', 'purchase_contacts.purchase_id')
                ->leftJoin('contacts', 'purchase_contacts.contact_id', '=', 'contacts.id')
                ->where('purchases.user_id', Auth::user()->id)
                ->select('contacts.*')
                ->get();
        return view('user.contacts', ['contacts' => $contacts]);
    }
}
