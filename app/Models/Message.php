<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    //الجدول المربوط به
    protected $table = "messages";
    //العناصر
    protected $fillable = [
        'id', 'first_name', 'last_name', 'email', 'number', 'message_title', 'message', 'ip', 'created_at'
    ];

    public $timestamps = false;
}
