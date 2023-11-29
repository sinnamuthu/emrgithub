<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
  
    protected $table = 'call';
    protected $primarykey = 'id';
    protected $fillable =[
        'call_title',
        'call_note',
        'call_date',
        'call_time',
        'branch',
        'appo_id',
        'call_patientid',
    ];
    use HasFactory;
}
