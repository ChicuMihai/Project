<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 18 Feb 2018 09:31:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class English
 * 
 * @property int $id
 * @property bool $isToefl
 * @property bool $isIelts
 * @property bool $isCourses
 * 
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models
 */
class English extends Eloquent
{
	protected $table = 'english';
	public $timestamps = false;

	protected $casts = [
		'isToefl' => 'bool',
		'isIelts' => 'bool',
		'isCourses' => 'bool'
	];

	protected $fillable = [
		'isToefl',
		'isIelts',
		'isCourses'
	];

	public function users()
	{
		return $this->hasMany(\App\Models\User::class, 'englishId');
	}
}
