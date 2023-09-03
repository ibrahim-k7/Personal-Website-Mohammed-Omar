<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Success_partner extends Model
{
    use HasFactory;
    //الجدول المربوط به
    protected $table = "Success_partners";
    //العناصر
    protected $fillable = [
        'id', 'client', 'details', 'image_01', 'image_02', 'image_03', 'image_04', 'image_05', 'image_06', 'created_at', 'updated_at'
    ];
}
