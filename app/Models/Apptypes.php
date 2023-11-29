<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apptypes extends Model
{
  
    protected $table = 'app_types';
    protected $primarykey = 'app_type_id';
    protected $fillable =[
        'app_type_desc',
    ];
    use HasFactory;
}
