<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 18 Feb 2018 09:31:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Emergency
 * 
 * @property int $id
 * @property string $emergencyName
 * @property int $emergencyNumber
 * 
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models
 */
class Emergency extends Eloquent
{
	protected $table = 'emergency';
	public $timestamps = false;

	protected $casts = [
		'emergencyNumber' => 'int'
	];

	protected $fillable = [
		'emergencyName',
		'emergencyNumber'
	];

	public function users()
	{
		return $this->hasMany(\App\Models\User::class, 'emergencyId');
	}
}
