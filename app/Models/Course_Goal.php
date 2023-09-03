<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_Goal extends Model
{
    use HasFactory;
    protected $table = "courses_goals";
    //العناصر
    protected $fillable = [
        'id', 'goal', 'course_id'
    ];

    public function course(){
        return $this->belongsTo(Course::class);
    }

}
