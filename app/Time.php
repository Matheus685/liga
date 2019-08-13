<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $fillable = ['nome', 'gols_feitos', 'gols_tomados', 'vitorias', 'derrotas', 'empates', 'pontuacao'];

    public function jogador ()
    {
        return $this->hasMany(Jogador::class);
    }

    public function liga ()
    {
        return $this->belongsTo(Liga::class);
    }

    public function responsavel ()
    {
        return $this->hasOne(Responsavel::class);
    }


    public function createResponsavel (Responsavel $resp)
    {
        $this->responsavel()->save($resp);
    }

    public function createJogador (Jogador $jogador)
    {
        $this->jogador()->save($jogador);
    }
}
