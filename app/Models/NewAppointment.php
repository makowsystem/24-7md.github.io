<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NewAppointment
 * 
 * @property int $new_app_id
 * @property string $first_name
 * @property string $last_name
 * @property int $age
 * @property Carbon $birthdate
 * @property string $gender
 * @property string $allergies
 * @property string $complaint
 * @property Carbon $appointment_date
 * @property string $appointment_time
 *
 * @package App\Models
 */
class NewAppointment extends Model
{
	protected $table = 'new_appointment';
	protected $primaryKey = 'new_app_id';
	public $timestamps = false;

	protected $casts = [
		'age' => 'int'
	];

	protected $dates = [
		'birthdate',
		'appointment_date'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'age',
		'birthdate',
		'gender',
		'allergies',
		'complaint',
		'appointment_date',
		'appointment_time'
	];
}
