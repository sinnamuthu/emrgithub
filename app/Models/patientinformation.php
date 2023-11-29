<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patientinformation extends Model
{
    
    protected $table = 'patientinformations';
    protected $primarykey = 'id';
    protected $fillable =[
        'startDate',
        'appointment_type',
        'appointmentsub_type',
        'appo_id',
        'title',
        'first_name',
        'second_name',
        'dateofbirth',
        'age',
        'gender',
        'nationality',
        'country_pin',
        'contact',
        'mail',
        'occupation',
        'marriage_status',
        'lo_doorno',
        'lo_street',
        'lo_location',
        'lo_csc',
        'lo_pincode',
        'switch',
        'per_doorno',
        'per_street',
        'per_location',
        'per_csc',
        'per_pincode',
        'branch',
        'medinfo',
        'wom',
        'wom_others',
        'present_med',
        'allerg_med',
        'smoke',
        'perday',
        'floss',
        'bp',
        'diabetes',
        'acidity',
        'thyroid',
        'heart',
        'asthma',
        'kd',
        'pregnant',
        'epilepsy',
        'pills',
        'branch_name',
    ];
    use HasFactory;
}
