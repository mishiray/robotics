<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComments extends Model
{
    
    protected $guarded = [];

    public function blog (){
        return $this->belongsTo(Blog::class);
    }
    public function getAvatar(){
        return route('homepage').env('ASSET_URL').'/user.png';
    }
}
