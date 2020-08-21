<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Contact;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\QueryException;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function createContact(Request $request)
    {
        try {
            $admin = \App\Admin::first();
    
            $this->validator($request->all())->validate();
            $contact = Contact::create([
                'admin_id' => $admin->id, 
                'display_name' => $request['display_name'],
                'whatsapp' => $request['whatsapp'],
                'role' => $request['role'],
            ]);
            return response()->json(array(
                'ok' => true,
                'url' => 'https://wa.me/' . $admin->whatsapp . '?text=' . $admin->message,
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
            'display_name' => ['required', 'string', 'max:255'],
            'whatsapp' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
        ]);
    }
}
