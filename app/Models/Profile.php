<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';
    protected $primarykey = 'id';
    protected $fillable =[
        'hospitalname',
        'branchname',
        'email',
        'phoneNumber',
        'branch',
        'address',
        'city',
        'state',
        'picode',
        'country',
        'image',
        'status',
    ];
    use HasFactory;
}
