<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chiefcomps extends Model
{
    protected $table = 'chief_comps';
    protected $primarykey = 'chief_comp_id';
    protected $fillable =[
        'chief_comp_name',
    ];
    use HasFactory;
}
