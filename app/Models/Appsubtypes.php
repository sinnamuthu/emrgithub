<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appsubtypes extends Model
{
    protected $table = 'app_subtypes';
    protected $primarykey = 'app_subtype_id';
    protected $fillable =[
        'app_type_id',
        'app_subtype_desc',
    ];
    use HasFactory;
}
