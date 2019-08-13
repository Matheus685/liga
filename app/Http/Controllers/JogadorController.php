<?php

namespace App\Http\Controllers;

use App\Jogador;
use Illuminate\Http\Request;
use App\Responsavel;
use Illuminate\Support\Facades\Session;

class JogadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('jogador.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth()->user()->id;
        $time = Responsavel::where('user_id', $user_id)->first()->time;

        $form = (object)$request->except('_token');
        $jogador = new Jogador();
        $jogador->nome = $form->nome;
        $jogador->posição = $form->posicao;
        $jogador->rg = $form->rg;
        $jogador->birth = $form->birth;

        if (!$time->createJogador($jogador)) {
        }
        Session::flash('success', 'Jogador Criado Com Sucesso');
        return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jogador  $jogador
     * @return \Illuminate\Http\Response
     */
    public function show(Jogador $jogador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jogador  $jogador
     * @return \Illuminate\Http\Response
     */
    public function edit(Jogador $jogador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jogador  $jogador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jogador $jogador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jogador  $jogador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jogador $jogador)
    {
        //
    }
}
