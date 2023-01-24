<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DoctorPatient
 * 
 * @property int $dp_id
 * @property int $appointment_id
 * @property int $doctor_id
 * @property string|null $doctors_note
 * @property int $service_id
 * @property int $patient_id
 *
 * @package App\Models
 */
class DoctorPatient extends Model
{
	protected $table = 'doctor_patients';
	protected $primaryKey = 'dp_id';
	public $timestamps = false;

	protected $casts = [
		'appointment_id' => 'int',
		'doctor_id' => 'int',
		'service_id' => 'int',
		'patient_id' => 'int'
	];

	protected $fillable = [
		'appointment_id',
		'doctor_id',
		'doctors_note',
		'service_id',
		'patient_id'
	];
}
