<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Contact;
use App\Purchase;
use App\PurchaseContact;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\QueryException;
use \Exception;

class AdminCreatePurchaseController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

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
        $users = User::where('admin_id', Auth::user()->id)
                ->orderBy('display_name', 'desc')
                ->get();
        $contacts = Contact::where('admin_id', Auth::user()->id)
                ->orderBy('display_name', 'desc')
                ->get();
        return view('admin.create_purchase', [
            'users' => $users,
            'contacts' => $contacts,
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create(Request $request)
    {
        try {  
            $this->validator($request->all())->validate();
            $purchase = Purchase::create([
                'admin_id' => Auth::user()->id, 
                'user_id' => $request['user_id'],
            ]);

            foreach ($request->contacts as $key => $contactId) {
                $purchase_contact = PurchaseContact::create([
                    'purchase_id' => $purchase->id,
                    'contact_id' => $contactId, 
                ]);
            }

            return response()->json(array(
                'ok' => true,
            ));
        } catch(ValidationException $exc) {
            return response()->json(array(
                'ok' => false,
                'message' => $exc->getMessage(),
            ));
        } catch(QueryException $exc) {
            return response()->json(array(
                'ok' => false,
                'message' => $exc->getMessage(),
            ));
        } catch(Exception $exc) {
            return response()->json(array(
                'ok' => false,
                'message' => $exc->getMessage(),
            ));
        }
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'user_id' => ['required', 'integer'],
        ]);
    }
}
