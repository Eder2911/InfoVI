<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostEstudio extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'tipo' => 'required|min:5|max:100', 
            'fechaRealizacion' => 'required',
            'horaRealizacion' => 'required',
            'asistencia' => 'required', 
            'fechaEntrega', 
            'fechaProximo', 
            'fechaRevision', 
            'resultado', 
            'resultado', 
            'documento' => 'max:2048'
        ];
    }
}
