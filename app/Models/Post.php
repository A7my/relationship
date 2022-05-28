<?php

namespace App\Models;

use App\Models\comments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    function comment(){
        return $this->hasMany(comments::class , 'post_id');
    }
}
