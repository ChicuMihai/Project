<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 18 Feb 2018 09:31:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Country
 *
 * @property int $id
 * @property string $countryName
 *
 * @property \Illuminate\Database\Eloquent\Collection $adresses
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models
 */
class Country extends Eloquent
{
	protected $table = 'country';
	public $timestamps = false;

	protected $fillable = [
		'countryName'
	];
	

	public function adresses()
	{
		return $this->hasMany(\App\Models\Adress::class, 'countryId');
	}

	public function users()
	{
		return $this->hasMany(\App\Models\User::class, 'countryofBirth');
	}
}
