<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointment';
    protected $primarykey = 'id';
    protected $fillable =[
        'title',
        'firstname',
        'lastname',
        'date_appointment',
        'intime',
        'outtime',
        'countrycode',
        'contact_no',
        'email',
        'choose_doctor',
        'status',
        'reason_appointment',
        'note',
        'branch',
    ];
    use HasFactory;
}
