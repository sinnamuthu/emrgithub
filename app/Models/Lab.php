<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
   
    protected $table = 'lab';
    protected $primarykey = 'id';
    protected $fillable =[
        'orderdate',
        'completiondate',
        'doctor',
        'lab',
        'teeth_18',
        'teeth_17',
        'teeth_16',
        'teeth_15',
        'teeth_14',
        'teeth_13',
        'teeth_12',
        'teeth_11',
        'teeth_21',
        'teeth_22',
        'teeth_23',
        'teeth_24',
        'teeth_25',
        'teeth_26',
        'teeth_27',
        'teeth_28',
        'teeth_48',
        'teeth_47',
        'teeth_46',
        'teeth_45',
        'teeth_44',
        'teeth_43',
        'teeth_42',
        'teeth_41',
        'teeth_31',
        'teeth_32',
        'teeth_33',
        'teeth_34',
        'teeth_35',
        'teeth_36',
        'teeth_37',
        'teeth_38',
        'branch',
        'appo_id',
        'upper',
        'full',
        'lower',
        'noteeth',
        'procedure',
        'type',
        'costper',
        'cost',
        'occlusal',
        'middle',
        'specialinstruction',
        'repeat',
        'trial',
        'bp',
        'diabetes',
        'acidity',
        'thyroid',
        'heart',
        'remark',


    ];
    use HasFactory;
}
