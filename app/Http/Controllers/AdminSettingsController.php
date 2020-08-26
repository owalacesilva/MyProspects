<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use \Exception;

class AdminSettingsController extends Controller
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
        return view('admin.settings');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function updateWhatsapp(Request $request)
    {
        try {
            $this->validator($request->all())->validate();
            $admin = Auth::user();
            $admin->fill([
                'whatsapp' => $request['whatsapp'],
                'message' => $request['message'],
            ]);
            $admin->save();

            return response()->json(array(
                'ok' => true,
            ));
        } catch (ValidationException $exc) {
            return response()->json(array(
                'ok' => false,
                'message' => $exc->getMessage(),
            ));
        } catch (Exception $exc) {
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
    public function updateSEO(Request $request)
    {
        try {
            Validator::make($request->all(), [
                'seo_name' => ['required', 'string', 'max:255'],
                'seo_title' => ['required', 'string', 'max:255'],
                'seo_description' => ['required', 'string', 'max:255'],
            ])->validate();

            $admin = Auth::user();
            /*$admin->fill([
                'seo_name' => $request['seo_name'],
                'seo_title' => $request['seo_title'],
                'seo_description' => $request['seo_description'],
            ]);
            $admin->save();*/

            return response()->json(array(
                'ok' => true,
            ));
        } catch (ValidationException $exc) {
            return response()->json(array(
                'ok' => false,
                'message' => $exc->getMessage(),
            ));
        } catch (Exception $exc) {
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
            'whatsapp' => ['required', 'string', 'max:255'],
            'message' => ['string', 'max:255'],
        ]);
    }
}
