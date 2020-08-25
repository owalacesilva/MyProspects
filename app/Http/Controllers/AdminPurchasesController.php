<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Purchase;

class AdminPurchasesController extends Controller
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
        $purchases = DB::table('purchases')
                ->join('users', 'purchases.user_id', '=', 'users.id')
                ->leftJoin('purchase_contacts', 'purchases.id', '=', 'purchase_contacts.purchase_id')
                ->where('purchases.admin_id', Auth::user()->id)
                ->select('users.*', 'purchases.*', 'purchase_contacts.purchase_id', DB::raw('COUNT(purchase_contacts.purchase_id) as `total_contacts`'))
                ->groupBy('purchases.id')
                ->get();
        return view('admin.purchases', ['purchases' => $purchases]);
    }
}
