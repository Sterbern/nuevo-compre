@extends('layouts.plantilla')

@section('title', 'index')

@section('content')

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex" action="?" method="GET">
      <input class="form-control me-3" name="search" id="search" type="search" placeholder="Buscar" aria-label="Search" value="{{ request()->search }}">
      <button class="btn btn-info" type="submit">Buscar</button>
    </form>
  </div>
</nav>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">CUIT</th>
        <th scope="col">RAZON SOCIAL</th>
        <th scope="col">LOCALIDAD</th>
        <th scope="col">TELEFONO</th>
        <th scope="col">ACCIONES</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($datos as $dato)
      <tr>
        <th scope="row">{{ $dato->id }}</th>
        <td>{{ $dato->cuit }}</td>
        <td>{{ $dato->razon_social }}</td>
        <td>{{ $dato->localidad }}</td>
        <td>{{ $dato->telefono }}</td>
        <td>
          <a href="{{ route('compre.show', $dato->id) }}" class="btn btn-sm"><i class="fas fa-eye" ></i></a>
          |
          <a href="{{ route('compre.edit', $dato) }}" class="btn btn-sm"><i class="fas fa-edit"></i></a>                          
        </td>
      </tr>
    @endforeach        
    </tbody>
  </table>   
  <nav aria-label="Page navigation example">
    <ul class="pagination">
        {{ $datos->links() }}
    </ul>
  </nav>
@endsection
