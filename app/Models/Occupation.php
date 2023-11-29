<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    protected $table = 'occupation_master';
    protected $primarykey = 'occupation_id';
    protected $fillable =[
        'occupation_name',
    ];
    use HasFactory;
}
