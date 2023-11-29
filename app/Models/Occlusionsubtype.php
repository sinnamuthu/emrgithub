<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Occlusionsubtype extends Model
{
    protected $table = 'occlusion_sub_types';
    protected $primarykey = 'occlusion_sub_type_id';
    protected $fillable =[
        'occlusion_sub_type_name',
    ];
    use HasFactory;
}
