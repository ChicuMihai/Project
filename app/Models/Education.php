<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 18 Feb 2018 09:31:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Education
 * 
 * @property int $id
 * @property string $schoolName
 * @property string $schoolAdress
 * @property float $schoolAvg
 * 
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models
 */
class Education extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'schoolAvg' => 'float'
	];

	protected $fillable = [
		'schoolName',
		'schoolAdress',
		'schoolAvg'
	];

	public function users()
	{
		return $this->hasMany(\App\Models\User::class, 'educationId');
	}
}
