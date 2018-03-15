<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 18 Feb 2018 09:31:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Nationality
 *
 * @property int $id
 * @property string $nationality
 *
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models
 */
class Nationality extends Eloquent
{
	protected $table = 'nationality';
	public $timestamps = false;

	protected $fillable = [
		'nationality'
	];

	public function users()
	{
		return $this->hasMany(\App\Models\User::class, 'nationaltyId');
	}
}
