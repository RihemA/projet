<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
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

    public function loginCheck(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        //  dd(Auth::attempt($credentials),$credentials);
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            // dd(Auth::attempt($credentials));
            // Check user role and redirect based on role
            if ($user->role === 'admin') {
                return redirect()->route('admin');
            } elseif ($user->role === 'member') {
                return redirect()->route('home');
            }
        } else {
            dd(Auth::user());
            return redirect()
                ->route('login')
                ->withInput($request->only('email', 'remember'))
                ->withErrors([
                    'email' => __('auth.failed'),
                ]);
        }
        //dd($request);

        // if(Auth::attempt(['email' => $request->get('email'),
        // 'password' => $request->get('password')])){
        //     dd(Auth::user()->role);
        //     if(Auth::user()->role =='Admin')

        //     return redirect()->route('admin');
        //     if(Auth::user()->role =='Member')
        //     return redirect()->route('home');
        // }
        // else{
        //     return redirect()->route('login');
        // }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('');
    }
}
