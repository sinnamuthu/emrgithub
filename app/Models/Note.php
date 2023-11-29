<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'note';
    protected $primarykey = 'id';
    protected $fillable =[
        'note_date',
        'tooth_no',
        'doc_type',
        'procedurenote',
        'type',
        'appo_id',
        'branch',
        'clinicalnotes',
        'notetype',
    ];
    use HasFactory;
}
