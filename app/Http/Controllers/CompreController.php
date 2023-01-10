<?php

namespace App\Http\Controllers;

use App\Models\Datos;
use Illuminate\Http\Request;

use App\Http\Requests\StoreDatos;
use Illuminate\Support\Facades\DB;

class CompreController extends Controller
{
    public function index(Request $request){

        $search = $request->search;

        $datos = Datos::orderby('id', 'desc')->when($search, function($query, $search){

            return $query->where('razon_social','like',"%{$search}%");

        })->paginate(10);

        return view('compre_pampeano.index', compact('datos'));     
    }

    public function create(){
        return view('compre_pampeano.create');
    }

    public function store(StoreDatos $request){
        
        $dato = Datos::create($request->all());

        return redirect()->route('compre.show', $dato->id);

    }

    public function show(Datos $dato){

        return view('compre_pampeano.show', compact('dato'));
    }

    public function edit(Datos $dato){

       return view('compre_pampeano.edit', compact('dato'));

    }

    public function update(Request $request, Datos $dato){

        $request->validate([

            'cuit' => 'required',
            'razon_social' => 'required',
            'localidad' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'fec_ven' => 'required',
            'productos' => 'required|min:10',
            'chapa_sticker' => 'required',
            'tipo' => 'required',
            'fec_reg' => 'required'
        ]);        

        $dato->update($request->all());

        return redirect()->route('compre.show', $dato->id);
    }

    public function destroy(Datos $dato){

        $dato->delete();

        return redirect()->route('compre.index');
    }

    public function search(Request $request){      
        
        $dato = $request->query;

        return view('compre_pampeano.buscar');

    }
    
}
