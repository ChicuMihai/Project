<?php

namespace App\Http\Controllers;
use Illuminate\Auth\AuthServiceProvider;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{

  use AuthenticatesUsers;
  protected function guard()
   {
     return Auth::guard('user');
   }
  public function __construct()
  {
      $this->middleware('guest')->except('logout');
  }


    public function login(Request $request){
      if(Auth::attempt([
        'username'=>$request->username,
        'password'=>$request->password])){
          User::where('username',$request->username)->first();
          return redirect('/apply');
        }
      else{
        return redirect('/login');
      }

}
public function logout(Request $request) {

        Session::flush();
        return redirect('/');
}


}
