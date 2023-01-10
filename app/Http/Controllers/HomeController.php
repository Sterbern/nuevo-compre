<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datos;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $search = $request->search;

        $datos = Datos::orderby('id', 'desc')->when($search, function($query, $search){

            return $query->where('razon_social','like',"%{$search}%");

        })->paginate();
        
        return view('home', compact('datos'));
    }    
}
