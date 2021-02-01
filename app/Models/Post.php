<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    /**
     * GETTER de la category à qui appartient ce post.
     */
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}
