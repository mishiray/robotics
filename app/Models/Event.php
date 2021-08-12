<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title','slug','description','image','event_date','event_link','location','address','phone','email','meta_keywords','meta_description'];
    public function getStatus(){
        if($this->status == 0){
            return 'Unpublished';
        }
        else{
            return 'Published';
        }
    }
    use HasFactory;
}
