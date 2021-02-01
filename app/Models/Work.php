<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    /**
     * GETTER des clients du work
     */
    public function clients(){
        return $this->belongsTo('App\Models\Client');
    }

    /**
     * GETTER des tags du work
     */
    public function tags() {
      return $this->belongsToMany('App\Models\Tag', 'works_has_tags');
    }

}
