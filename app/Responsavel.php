<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsavel extends Model
{
    protected $fillable = ['user_id'];

    public function time ()
    {
        return $this->belongsTo(Time::class);
    }
}
