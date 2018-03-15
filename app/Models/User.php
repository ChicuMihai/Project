<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 18 Feb 2018 09:31:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;


/**
 * Class User
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $firstName
 * @property string $lastName
 * @property string $middleName
 * @property  $birthday
 * @property int $nationalityId
 * @property int $sNationaltyId
 * @property int $idnp
 * @property string $passportId
 * @property int $countryofBirth
 * @property string $gender
 * @property bool $isMarried
 * @property int $adressId
 * @property int $emergencyId
 * @property int $educationId
 * @property int $englishId
 * @property bool $isEmployed
 * @property string $disabilities
 * @property string $hobbies
 * @property int $studStatusId
 *
 * @property \App\Models\Nationality $nationality
 * @property \App\Models\Country $country
 * @property \App\Models\Adress $adress
 * @property \App\Models\Emergency $emergency
 * @property \App\Models\Education $education
 * @property \App\Models\English $english
 * @property \App\Models\Status $status
 *
 * @package App\Models
 */
class User extends \Eloquent implements Authenticatable

{
	use AuthenticableTrait;
	protected $table = 'user';
	public $timestamps = false;

	protected $casts = [
		'nationalityId' => 'int',
		'sNationaltyId' => 'int',
		'idnp' => 'int',
		'countryofBirth' => 'int',
		'isMarried' => 'bool',
		'adressId' => 'int',
		'emergencyId' => 'int',
		'educationId' => 'int',
		'englishId' => 'int',
		'isEmployed' => 'bool',
		'studStatusId' => 'int'
	];


	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'username',
		'password',
		'email',
		'firstName',
		'lastName',
		'middleName',
		'birthday',
		'nationalityId',
		'sNationaltyId',
		'idnp',
		'passportId',
		'countryofBirth',
		'gender',
		'isMarried',
		'adressId',
		'emergencyId',
		'educationId',
		'englishId',
		'isEmployed',
		'disabilities',
		'hobbies',
		'studStatusId'
	];

	public function nationality()
	{
		return $this->belongsTo(\App\Models\Nationality::class, 'nationaltyId');
	}

	public function country()
	{
		return $this->belongsTo(\App\Models\Country::class, 'countryofBirth');
	}

	public function adress()
	{
		return $this->belongsTo(\App\Models\Adress::class, 'adressId');
	}

	public function emergency()
	{
		return $this->belongsTo(\App\Models\Emergency::class, 'emergencyId');
	}

	public function education()
	{
		return $this->belongsTo(\App\Models\Education::class, 'educationId');
	}

	public function english()
	{
		return $this->belongsTo(\App\Models\English::class, 'englishId');
	}

	public function status()
	{
		return $this->belongsTo(\App\Models\Status::class, 'studStatusId');
	}
}
