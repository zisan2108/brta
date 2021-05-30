<?php

namespace App\Http\Controllers\Auth;

use Closure;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user) 
    {
         if ($request->user()->hasRole('admin')) {
            return redirect('/dashboard');
         } else if ($request->user()->hasRole('examiner')) {
            return redirect('/edashboard');
         }
         else if ($request->user()->hasRole('parts_checker')) {
            return redirect('/dashboard');
         }
         else if ($request->user()->hasRole('native')) {
            return redirect('/home');
         }
         else if ($request->user()->hasRole('foreign')) {
            return redirect('/home');
         }
         else if ($request->user()->hasRole('police_station')) {
            return redirect('/pdashboard');
         }
         else if ($request->user()->hasRole('traffic')) {
            return redirect('/tdashboard');
         } 
         else {
            return redirect('/home');
         }
    }
}
