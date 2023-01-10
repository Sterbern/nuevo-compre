<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDatos extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
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
        ];
    }

    public function attributes()
    {
        return[
            'fec_ven' => 'fecha de vencimiento',
            'fec_reg' => 'fecha de registro',
        ];
    }
}
