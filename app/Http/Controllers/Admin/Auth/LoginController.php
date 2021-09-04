<?php

namespace App\Http\Controllers\Admin\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
  /*
    |--------------------------------------------------------------------------
    | Admin Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users (Admin) for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    | override (for admin guard)
    */
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm(){
      return view('admin.auth.login');
  }


  /**
     * Log the Admin user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();
 
        $request->session()->invalidate();
 
        return redirect()->route('admin.login');
    }


    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('admin');
    }


}


// test authentication manully
// public function authenticate(Request $request){
    //     $request->validate([
    //       'email' => ['required', 'email'],
    //       'password' => ['required'],
    //     ]);

    //     $model= Admin::query()->where('email', $request->get('email'))->firstOrFail();

    //     if(!Hash::check($request->get('password'),$model->password)){
    //       return back()->with('error', 'Email or password is incorrect');
    //     }

    //     Auth::guard('admin')->login($model);

    //     return redirect()->route('home');
    // }