<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivrosController extends Controller
{
    //
    public function index(){
    	$livros = Livro::all();
    	 $livros = Livro::all()->sortbydesc('idl');
    	// $livros = Livro::paginate(4);

    	return view('livros.index', [
    	'livros' => $livros
    	]);
    }

    public function show (Request $request) {
    	$idLivro = $request->id;
    	$livro = Livro::findOrFail ($idLivro);

    	return view ('livros.show', [
    		'livro' => $livro
    	]);
    }
}
