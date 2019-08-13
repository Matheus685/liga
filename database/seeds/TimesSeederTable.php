<?php

use Illuminate\Database\Seeder;
use App\Liga;
use App\Time;

class TimesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // Liga Ouro
        $liga = Liga::find(1);
        $time = new Time();
        $time->nome = 'Aston';
        $time->gols_feitos = 0;
        $time->gols_tomados = 0;
        $time->vitorias = 0;
        $time->derrotas = 0;
        $time->empates = 0;

        $liga->createTimes($time);

        $liga = Liga::find(1);
        $time = new Time();
        $time->nome = 'Ajax';
        $time->gols_feitos = 0;
        $time->gols_tomados = 0;
        $time->vitorias = 0;
        $time->derrotas = 0;
        $time->empates = 0;

        $liga->createTimes($time);

        $liga = Liga::find(1);
        $time = new Time();
        $time->nome = 'Juventus';
        $time->gols_feitos = 0;
        $time->gols_tomados = 0;
        $time->vitorias = 0;
        $time->derrotas = 0;
        $time->empates = 0;

        $liga->createTimes($time);

    }
}
