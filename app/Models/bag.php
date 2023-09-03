<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bag extends Model
{
    use HasFactory;

    //الجدول المربوط به
    protected $table = "bags";
    //العناصر
    protected $fillable = [
        'id', 'name', 'price', 'image', 'created_at', 'updated_at'
    ];

    public function content(){
        return $this->hasMany(Bag_Content::class);
    }

}
