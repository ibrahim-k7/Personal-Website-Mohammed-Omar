<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_Interlocutor extends Model
{
    use HasFactory;

    protected $table = "courses_interlocutor";
    //العناصر
    protected $fillable = [
        'id', 'interlocutor', 'course_id'
    ];
}
