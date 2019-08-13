<?php

use Illuminate\Database\Seeder;
use App\Liga;

class LigaSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $liga = new Liga();
        $liga->nome = 'Liga Ouro';
        $liga->save();

        $liga = new Liga();
        $liga->nome = 'Liga Prata';
        $liga->save();

        $liga = new Liga();
        $liga->nome = 'Liga Sub-20';
        $liga->save();

        $liga = new Liga();
        $liga->nome = 'Liga Feminina';
        $liga->save();
    }
}
