<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jogador extends Model
{
    protected $fillable = ['nome', 'posicao', 'rg', 'birth', 'vermelho', 'amarelo', 'gols'];

    public function time ()
    {
        return $this->belongsTo(Time::class);
    }
}
