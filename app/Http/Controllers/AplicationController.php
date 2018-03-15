<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Nationality;
use App\Models\User;
use App\Models\Adress;
use App\Models\Education;
use App\Models\Speciality;
use App\Models\English;
use App\Models\Emergency;
use App\Models\Status;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class AplicationController extends Controller
{
  public function countries() {
$countries=Country::all();
return view('apply',compact('countries'));
}






    public function validation(){



      $this->validate($request,[
        'idnp'=>'required|min:13|numeric',
        'passportid'=>'required|string|min:3',
        'countryofBirth'=>'required',
        'gender'=>'required',
        'maritalStatus'=>'required',
        'city'=>'required|string|min:3|max:200',
        'street'=>'required|string|min:3',
        'countryId'=>'required',
        'postCode'=>'required|min:3|numeric',
        'homeNumber'=>'required|min:3|numeric',
        'mobileNumber'=>'required|min:3|numeric',
        'emergencyName'=>'required|string|min:3',
        'emergencyNumber'=>'required|numeric|min:3',
        'schoolName'=>'required|string|min:3',
        'schoolAdress'=>'required|string|min:3',
        'schoolAvg'=>'required|numeric',
        'isContract'=>'required',
        'isBudget'=>'required',
        'isToefl'=>'required',
        'islelts'=>'required',
        'isCourses'=>'required',
        'isEmployed'=>'required'
      ]);

      $user_adress= new Adress;
      $user_adress->countryId=$request->countryId;
      $user_adress->city=$request->city;
      $user_adress->postCode=$request->postCode;
      $user_adress->homeNumber=$request->homeNumber;
      $user_adress->mobileNumber=$request->mobileNumber;
      $user_adress->street=$request->street;
      $user_adress->save();
      $user_adress_id=$user_adress->id;
      $user_emergency=new Emergency;
      $user_emergency->emergencyName=$request->emergencyName;
      $user_emergency->emergencyNumber=$request->emergencyNumber;
      $user_emergency->save();
      $user_emergency_id=$user_emergency->id;
      $user_education=new Education;
      $user_education->schoolName=$request->schoolName;
      $user_education->schoolAdress=$request->schoolAdress;
      $user_education->schoolAvg=$request->schoolAvg;
      $user_education->save();
      $user_education_id=$user_education->id;
      $user_english=new English;
      $user_english->isToefl=$request->isToefl;
      $user_english->isIelts=$request->islelts;
      $user_english->isCourses=$request->isCourses;
      $user_english->save();
      $user_enlish_id=$user_english->id;
      $user_status=new Status;
      $user_status->isBudget=$request->isBudget;
      $user_status->isContract=$request->isContract;
      $user_status->save();
      $user_status_id=$user_status->id;
      $id=Auth::user()->id;
      $user=User::find($id);
      $user->idnp=$request->idnp;
      $user->passportid=$request->passportid;
      $user->gender=$request->gender;
      $user->isMarried=$request->maritalStatus;
      $user->countryofBirth=$request->countryofBirth;
      $user->isEmployed=$request->isEmployed;
      $user->adressId=$user_adress_id;
      $user->emergencyId=$user_emergency_id;
      $user->educationId=$user_education_id;
      $user->englishId=$user_enlish_id;
      $user->studStatusId=$user_status_id;
      $user->save();
      return redirect('/view');










    }
}
