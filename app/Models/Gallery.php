<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public $table = 'gallery';

    protected $guarded = [];
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
