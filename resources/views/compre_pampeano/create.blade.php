@extends('layouts.plantilla')

@section('title', 'create')

@section('content')

        <div class="container">
            <h4>Nuevo registro</h4> 
            <form action="{{ route('compre.store') }}" method="POST">
                @csrf
                
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Cuit: *</span>
                    <input type="number" class="form-control" name="cuit" id="cuit" value="{{ old('cuit') }}">
                    
                    @error('cuit')
                            <br>
                                <strong>* {{ $message }}</strong>
                            <br>            
                        @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Razón Social: *</span>
                    <input type="text" class="form-control" name="razon_social" id="razon_social" value="{{ old('razon_social') }}">
                                    
                    @error('razon_social')
                        <br>
                            <strong>* {{ $message }}</strong>
                        <br>            
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Localidad: *</span>                    
                    <input type="text" class="form-control" name="localidad" id="localidad" value="{{ old('localidad') }}">
                    
                    @error('localidad')
                            <br>
                                <strong>* {{ $message }}</strong>
                            <br>            
                    @enderror                    
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Teléfono: *</span>                    
                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Formato: 2954-123456" pattern="[0-9]{4}-[0-9]{6}" value="{{ old('telefono') }}">
                
                    @error('telefono')
                        <br>
                            <strong>* {{ $message }}</strong>
                        <br>            
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Email: *</span>
                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
                    
                        @error('email')
                            <br>
                                <strong>* {{ $message }}</strong>
                            <br>            
                        @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Fecha Vencimiento: *</span>                    
                    <input type="date" class="form-control" name="fec_ven" id="fec_ven" value="{{ old('fec_ven') }}">
                
                    @error('fec_ven')
                        <br>
                            <strong>* {{ $message }}</strong>
                        <br>            
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Chapa-Sticker: *</span>                    
                    <input type="text" class="form-control" name="chapa_sticker" id="chapa_sticker" value="{{ old('chapa_sticker') }}">
            
                    @error('chapa_sticker')
                        <br>
                            <strong>* {{ $message }}</strong>
                        <br>            
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"> Tipo: *</span>                   
                    <select class="form-control" name="tipo" id="tipo">
                        <option value="0">Tradicional</option>
                        <option value="1">Unidades Integrales</option>
                        <option value="2">Consumo</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Fecha Registro: *</span>                    
                    <input type="date" class="form-control" name="fec_reg" id="fec_reg" value="{{ old('fec_reg') }}">
                    
                        @error('fec_reg')
                            <br>
                                <strong>* {{ $message }}</strong>
                            <br>            
                        @enderror                    
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Productos: *</span>                    
                    <textarea name="productos" class="form-control" id="productos" >{{ old('productos') }}</textarea>
                
                    @error('productos')
                        <br>
                            <strong>* {{ $message }}</strong>
                        <br>            
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Guardar Registro</button>
            </form>
        </div>
    @endsection
