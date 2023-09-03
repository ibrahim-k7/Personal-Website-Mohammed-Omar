<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class counseling extends Model
{
    use HasFactory;
    //الجدول المربوط به
    protected $table = "consulting";
    //العناصر
    protected $fillable = [
        'id', 'counseling', 'created_at', 'updated_at'
    ];
}
