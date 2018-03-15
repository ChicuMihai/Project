<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 18 Feb 2018 09:31:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Adress
 * 
 * @property int $id
 * @property int $countryId
 * @property string $city
 * @property string $street
 * @property string $postCode
 * @property int $mobileNumber
 * @property int $homeNumber
 * 
 * @property \App\Models\Country $country
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models
 */
class Adress extends Eloquent
{
	protected $table = 'adress';
	public $timestamps = false;

	protected $casts = [
		'countryId' => 'int',
		'mobileNumber' => 'int',
		'homeNumber' => 'int'
	];

	protected $fillable = [
		'countryId',
		'city',
		'street',
		'postCode',
		'mobileNumber',
		'homeNumber'
	];

	public function country()
	{
		return $this->belongsTo(\App\Models\Country::class, 'countryId');
	}

	public function users()
	{
		return $this->hasMany(\App\Models\User::class, 'adressId');
	}
}
