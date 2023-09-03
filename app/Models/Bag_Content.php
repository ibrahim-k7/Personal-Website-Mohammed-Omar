<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bag_Content extends Model
{
    use HasFactory;

        //الجدول المربوط به
        protected $table = "bags_content";
        //العناصر
        protected $fillable = [
            'id', 'content','bag_id'
        ];

        public function bags(){
            return $this->belongsTo(bag::class);
        }
}
