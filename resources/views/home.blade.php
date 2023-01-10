@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    <h1 class="display-2" style="text-align:center;">Compre Pampeano</h1>    
      <div class="row">
        @foreach ($datos as $dato)
          <div class="col-sm-3">
            <div class="card shadow-lg p-3 mb-5 bg-body rounded">
              <div class="card-body">
                <h5 class="card-title">{{ $dato->razon_social }}</h5>
                <p class="card-text">{{ $dato->localidad }}</p>
                <p class="card-text">{{ $dato->telefono }}</p>
                <p class="card-text">{{ $dato->email }}</p>
                <p class="card-text">{{ $dato->tipo }}</p>
                <a href="{{ route('compre.show', $dato->id) }}" class="btn btn-info"><strong>Ver Perfil</strong></a>
              </div>
            </div>
          </div>
        @endforeach        
      </div>
      <nav aria-label="Page navigation example">
        <ul class="pagination">
            {{ $datos->links() }}
        </ul>
      </nav>
@endsection

