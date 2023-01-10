@extends('layouts.plantilla')

@section('title', 'show ')

@section('menu')
    
    <br>
    
@endsection

@section('content')

<div class="container">    
    
    <div class="row justify-content-md-center">
        <div class="card shadow-lg p-3 mb-5 bg-body rounded" style="width: 48rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title"><strong>RAZON SOCIAL: </strong>{{ $dato->razon_social}}</h4>
                <p class="card-text"><strong>CUIT: </strong>{{ $dato->cuit }}</p>
                <p class="card-text"><strong>LOCALIDAD: </strong>{{ $dato->localidad }}</p>
                <p class="card-text"><strong>TELEFONO: </strong>{{ $dato->telefono }}</p>
                <p class="card-text"><strong>EMAIL: </strong>{{ $dato->email }}</p>
                <p class="card-text"><Strong>FECHA DE VENCIMIENTO: </Strong>{{ $dato->fec_ven }}</p>
                <p class="card-text"><strong>PRODUCTOS: </strong> {{ $dato->productos }}</p>
                <p class="card-text"><strong>CHAPA STICKER: </strong>{{ $dato->chapa_sticker }}</p>
                <p class="card-text"><strong>TIPO: </strong>{{ $dato->tipo }}</p>
                <p class="card-text"><strong>FECHA REGISTRO: </strong>{{ $dato->fec_reg }}</p>
                
                <form action="{{ route('compre.destroy', $dato) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger delete">Eliminar Registro</button>
                    <a href="{{ route('compre.edit', $dato) }}" class="btn btn-primary">Editar Registro</a>
                </form>     
                
            </div>
        </div>
    </div>
</div>   
@endsection
