<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 18 Feb 2018 09:31:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Status
 * 
 * @property int $id
 * @property bool $isBuget
 * @property bool $isContract
 * @property int $specId
 * 
 * @property \App\Models\Speciality $speciality
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models
 */
class Status extends Eloquent
{
	protected $table = 'status';
	public $timestamps = false;

	protected $casts = [
		'isBuget' => 'bool',
		'isContract' => 'bool',
		'specId' => 'int'
	];

	protected $fillable = [
		'isBuget',
		'isContract',
		'specId'
	];

	public function speciality()
	{
		return $this->belongsTo(\App\Models\Speciality::class, 'specId');
	}

	public function users()
	{
		return $this->hasMany(\App\Models\User::class, 'studStatusId');
	}
}
