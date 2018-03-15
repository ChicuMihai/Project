<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Country;

class RegisterController extends Controller
{
  public function countries() {
$countries=Country::all();
return view('register',compact('countries'));
}

  public function register(Request $data){
    $this->validate($data,['username'=>'required|string|min:3',
      'firstName'=>'required|string|min:3',
      'middleName'=>'string|min:3',
      'lastName'=>'required|string|min:3',
      'password'=>'required|string|min:6|confirmed',
      'email'=>'required|string|min:7',
      'nationalityId'=>'required']);

      $user=new User;
      $user->username=$data->username;
      $user->firstName=$data->firstName;
if(!empty($data->middleName)){
  $middleName=$data->middleName;
}
else{$middleName='';}

      $user->middleName=$middleName;
      $user->lastName=$data->lastName;
      $password=$data->password;
      $password=bcrypt($password);
      $user->password=$password;
      $user->email=$data->email;
      $user->birthday=$data->birthday;
      $user->nationalityId=$data->nationalityId;
      $user->save();
      return  redirect('/');




  }
}
