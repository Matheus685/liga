<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liga extends Model
{
    protected $fillable = ['nome'];

    public function times ()
    {
        return $this->hasMany(Time::class);
    }

    public function jogos ()
    {
        return $this->hasMany(Jogos::class);
    }

    public function createTimes (Time $time)
    {
        $this->times()->save($time);
    }
}
