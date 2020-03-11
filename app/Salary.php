<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
     protected $fillable = [
        'salary', 'user_id', 'bonus',
    ];


     public function get_users()
    {
        return $this->belongsTo('App\User','user_id'); 
    }
}
