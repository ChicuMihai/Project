<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
  public function countries() {
$countries=Country::all();
return View::make('country',compact('countries'));
}
}
