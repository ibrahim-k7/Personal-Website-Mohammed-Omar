<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    //الجدول المربوط به
    protected $table = "courses";
    //العناصر
    protected $fillable = [
        'id', 'name', 'duration', 'presenter', 'place', 'price', 'created_at', 'updated_at'
    ];

    public function goal(){
        return $this->hasMany(Course_Goal::class);
    }
    public function interlocutor(){
        return $this->hasMany(Course_Interlocutor::class);
    }
}
