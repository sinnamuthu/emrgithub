<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observ extends Model
{
  
    protected $table = 'observ';
    protected $primarykey = 'id';
    protected $fillable =[
        'startDate',
        'doctor',
        'observation',
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
        'teeth_55',
        'teeth_54',
        'teeth_53',
        'teeth_52',
        'teeth_51',
        'teeth_61',
        'teeth_62',
        'teeth_63',
        'teeth_64',
        'teeth_65',
        'teeth_85',
        'teeth_84',
        'teeth_83',
        'teeth_82',
        'teeth_81',
        'teeth_71',
        'teeth_72',
        'teeth_73',
        'teeth_74',
        'teeth_75',
        'note',
        'upper',
        'full',
        'lower',


    ];
    use HasFactory;
}
