<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
   

    protected $casts = [
        'items' => 'array'
    ];
    protected $dates = ['date'];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
