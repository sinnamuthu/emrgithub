<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
  
    protected $table = 'doctor';
    protected $primaryKey = 'doc_id';
    protected $fillable =[ 
        'doc_name',
        'doc_type',
        'doc_speciality',
        'doc_mobile',
        'doc_email',
        'doc_cal_color',
        'doc_join_date',
        'doc_termination_date',
        'doc_status',
        'doc_branch',
        'note',
    ];
    use HasFactory;
}
