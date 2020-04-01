<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class EmployeeLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:employee');
    }

    public function showLoginForm(){
        return view('auth.employee-login');
    }

    public function login(Request $request){
        // Validate the form data
        $this->validate($request, [
            'emp_email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Attempt to log the user in
        if (Auth::guard('employee')->attempt(['emp_email' => $request->emp_email, 'password' => $request->password], $request->remember)){
            // If successful, then redirect to their intended location
            return redirect()->intended(route('employee.dashboard'));
        }
    
        // If unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('emp_email','remember'));
    }
}
