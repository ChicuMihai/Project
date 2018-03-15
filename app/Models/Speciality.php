<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 18 Feb 2018 09:31:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Speciality
 * 
 * @property int $id
 * @property string $spec1
 * @property string $spec2
 * @property string $spec3
 * 
 * @property \Illuminate\Database\Eloquent\Collection $statuses
 *
 * @package App\Models
 */
class Speciality extends Eloquent
{
	protected $table = 'speciality';
	public $timestamps = false;

	protected $fillable = [
		'spec1',
		'spec2',
		'spec3'
	];

	public function statuses()
	{
		return $this->hasMany(\App\Models\Status::class, 'specId');
	}
}
