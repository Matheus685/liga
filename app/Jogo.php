<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    protected $fillable = ['time_one_id', 'time_two_id', 'liga_id'];

}
