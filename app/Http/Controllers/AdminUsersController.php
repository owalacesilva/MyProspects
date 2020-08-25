<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Contact;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\QueryException;
use \Exception;

class AdminUsersController extends Controller
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
               ->orderBy('created_at', 'desc')
               ->get();
        return view('admin.users', ['users' => $users]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function block(Request $request)
    {
        try {
            $user = User::firstWhere([
                'id' => $request->user_id,
                'admin_id' => Auth::user()->id,
            ]);

            if ( is_null($user) ) {
                throw new Exception("Not found");
            }

            $user->blocked = true;
            $user->blocked_at = date('Y-m-d');

            $updated = $user->save();

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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function unblock(Request $request)
    {
        try {
            $user = User::firstWhere([
                'id' => $request->user_id,
                'admin_id' => Auth::user()->id,
            ]);

            if ( is_null($user) ) {
                throw new Exception("Not found");
            }

            $user->blocked = false;
            $user->blocked_at = null;
            
            $updated = $user->save();

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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contacts(Request $request)
    {
        $user = User::firstWhere([
            'username' => $request->username,
            'admin_id' => Auth::user()->id,
        ]);

        $contacts = Contact::where('admin_id', $user->admin_id)
               ->orderBy('created_at', 'desc')
               ->get();

        return view('admin.user_contacts', [
            'user' => $user,
            'contacts' => $contacts,
        ]);
    }
}
