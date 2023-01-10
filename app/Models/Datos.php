<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Datos extends Model
{
    use HasFactory;
    use SoftDeletes;
  
    
    protected $fillable = [
        'cuit',
        'razon_social',
        'localidad',
        'telefono',
        'email',
        'fec_ven',
        'productos',
        'chapa_sticker',
        'tipo',
        'fec_reg'
    ];
/*
    protected $dates = ['fecha_vencimiento'];
    public const TIPOS = ['Tradicional', 'Unidades Integrales', 'Consumo'];

    public function tipo(){
        return self::TIPOS[$this->tipo]; 
    }*/
}


