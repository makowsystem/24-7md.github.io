<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PatientAppointment
 * 
 * @property int $appointment_id
 * @property string $first_name
 * @property string $last_name
 * @property int $age
 * @property Carbon $birthdate
 * @property string $gender
 * @property string $complaint
 * @property string $allergies
 * @property Carbon $appointment_date
 *
 * @package App\Models
 */
class PatientAppointment extends Model
{
	protected $table = 'patient_appointments';
	protected $primaryKey = 'appointment_id';
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
		'complaint',
		'allergies',
		'appointment_date'
	];
}
