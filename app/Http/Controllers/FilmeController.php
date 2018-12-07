<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filme;
class FilmeController extends Controller
{
    public function index(){
    	$filmes = Filme::all();
    	$total = Filme::all()->count();
    	return view('list-filmes', compact ('filmes', 'total'));
    }

    public function create(){
    	return view('include-filme');
    }

    public function store(Request $request){
    	$film = new Filme;
    	$film-> strtitulo = $request -> strtitulo;
    	$film-> strdescricao = $request -> strdescricao;
    	$film->save();
    	return redirect()->route('film.index')->with('message', 'Filme Incluido com Sucesso !');
    }

    public function show($id){
    	//
    }

    public function edit($id){
    	$film = Filme::findOrFail($id);
    	return view('alter-filme', compact('film'));
    }

    public function update(Request $request, $id){
    	$film = Filme::findOrFail($id);
    	$film-> strtitulo = $request -> strtitulo;
    	$film-> strdescricao = $request -> strdescricao;
    	$film-> save();
    	return redirect()->route('film.index')->with('message', 'Filme Atualizado com Sucesso !');
    }

    public function destroy($id){
    	$film = Filme::findOrFail($id);
    	$film->delete();
    	return redirect()->route('film.index')->with('message','Filme excluido com sucesso');
    }
}
