<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intra_oral_observations extends Model
{
    protected $table = 'intra_oral_observations';
    protected $primarykey = 'intra_oral_observation_id';
    protected $fillable =[
        'intra_oral_observation_name',
    ];
    use HasFactory;
}
