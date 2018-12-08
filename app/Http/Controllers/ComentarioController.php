<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;
class ComentarioController extends Controller
{
    public function index(){
    	$comentarios = Comentario::all();
    	$total = Comentario::all()->count();
    	return view('list-comentarios', compact ('comentarios', 'total'));
    }

    public function create(){
    	return view('include-comentario');
    }

    public function store(Request $request){
    	$comment = new Comentario;
    	$comment-> strcomentario = $request -> strcomentario;
    	$comment-> intpontuacao = $request -> intpontuacao;
    	$comment->save();
    	return redirect()->route('comment.index')->with('message', 'Comentario Cadastrado !');
    }

    public function show($id){
    	//
    }
    
    public function update(Request $request, $id){
    	$comment = Comentario::findOrFail($id);
    	$comment-> strcomentario = $request -> strcomentario;
    	$comment-> intpontuacao = $request -> intpontuacao;
    	$comment-> save();
    	return redirect()->route('comment.index')->with('message', 'Comentario Atualizado !');
    }

    public function destroy($id){
    	$comment = Comentario::findOrFail($id);
    	$comment->delete();
    	return redirect()->route('comment.index')->with('message','Comentario Excluido');
    }
}

