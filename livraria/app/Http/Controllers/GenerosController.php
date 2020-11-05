<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;

class GenerosController extends Controller
{
    //
    public function index(){
    	$generos = Genero::all();
    	// ->sortbydesc('ida');
    $generos = Genero::paginate(4);

    	return view('generos.index', [
    	'generos' => $generos
    	]);
    }

   public function show (Request $request) {
    	$idGenero = $request->id;
    	$generos = Genero::findOrFail ($idGenero);

    	return view ('generos.show', [
    		'generos' => $generos
    	]);
    }
}
