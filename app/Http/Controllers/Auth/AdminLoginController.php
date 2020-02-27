<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
 use App\Http\Controllers\Controller;
 use Illuminate\Support\Facades\Auth;
 use \Illuminate\Validation\ValidationException;
class AdminLoginController extends Controller
 {

    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => ['logout']]);
    }

    public function showLoginForm()
    {
        return view('auth.admin_login');
    }

    public function login(Request $request)
    {
 // Validate the form data
        // dd($request);

        $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:3'
        ]);

    // Attempt to log the user in
        // if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        // // if successful, then redirect to their intended location

        //     dd($request);
        //     return redirect()->intended(route('admin.dashboard'));
        // }

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->intended(route('admin.dashboard'));
        }

        // dd($request);
    // if unsuccessful, then redirect back to the login with the form data
    return $this->sendFailedLoginResponse($request);    
    //return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],

        ]);
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|email',
            'password' => 'required|string',
            // 'g-recaptcha-response' => 'recaptcha',
        ]);
    }

    

    public function username()
    {
        return 'email';
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/admin');
    }
 }
