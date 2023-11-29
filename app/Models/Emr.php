<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emr extends Model
{
    protected $table = 'examination';
    protected $primarykey = 'id';
    protected $fillable =[
        'examdate',
        'exam_doctor',
        'chief_complaint',
        'exam_description',
        'class1',
        'class2',
        'class3',
        'bimaxillary',
        'none',
        '18',
        '28',
        '38',
        '48',
        '18sub',
        '28sub',
        '38sub',
        '48sub',
        'calculus1',
        'calculus2',
        'calculus3',
        'stains1',
        'stains2',
        'stains3',
        'hardTissue',
        'softTissue',
        'observations',
        'subtype',
        'branch',
        'appo_id',
    ];
    use HasFactory;
}
