<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    protected $table = 'chat';
    protected $primarykey = 'id';
    protected $fillable =[
        'sender_id',
        'reciever_id',
        'message',
    ];
    use HasFactory;
}
