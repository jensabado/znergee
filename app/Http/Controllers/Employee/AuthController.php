<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        $data['page_title'] = 'Login';

        return view('employee.auth.login', $data);
    }

    public function login_submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6|max:40',
        ]);

        if($validator->fails()) {
            $response = ['status' => 'error', 'message' => $validator->errors()];
        } else {
            if(Auth::guard('employee')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $request->get('remember'))) {
                $response = ['status' => 'success'];
            } else {
                $response = ['status' => 'error_alert', 'message' => 'Invalid credentials.'];
            }
        }

        return response()->json($response);
    }

    public function logout()
    {
        Auth::guard('employee')->logout();
        return redirect('/');
    }
}
