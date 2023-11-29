<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patientimage extends Model
{
    protected $table = 'patientimage';
    protected $primarykey = 'id';
    protected $fillable =[
        'imagedate',
        'image_type',
        'doctype',
        'appo_id',
        'branch',
        'image',
    ];
    use HasFactory;
}
