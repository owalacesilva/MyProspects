<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\QueryException;
use \Exception;

class AdminUpdateUserPasswordController extends Controller
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
    public function index(Request $request)
    {
        try {
            $user = User::firstWhere([
                'admin_id' => Auth::user()->id,
                'username' => $request->username,
            ]);

            if ( is_null($user) ) {
                throw new Exception("Not found");
            }

            return view('admin.update_user_password', ['user' => $user]);
        } catch(Exception $exc) {
            return response()->status(404);
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update(Request $request)
    {
        try {
            $user = User::firstWhere([
                'admin_id' => Auth::user()->id,
                'username' => $request->username,
            ]);

            if ( is_null($user) ) {
                throw new Exception("Not found");
            }

            $this->validator(array(
                'password' => $request->password,
            ))->validate();

            $updated = $user->update([
                'password' => Hash::make($request['password']),
            ]);

            $request->session()->flash('success', 'Password was successful!');

            return view('admin.update_user_password', ['user' => $user]);
        } catch(ValidationException $exc) {
            $request->session()->flash('danger', $exc->getMessage());
        } catch(QueryException $exc) {
            $request->session()->flash('danger', $exc->getMessage());
        } catch(Exception $exc) {
            return response()->status(404);
        }

        return view('admin.update_user_password', ['user' => $user]);
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
            'password' => ['required', 'string', 'min:8'],
        ]);
    }
}
