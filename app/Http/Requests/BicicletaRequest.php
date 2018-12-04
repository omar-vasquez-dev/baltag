<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BicicletaRequest extends FormRequest
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
            'descripcion' => 'required',
            'componente' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'publicacion' => 'required',
            'capacidad' => 'required',
            'material' => 'required',
            'rodada' => 'required',
            'modelaje' => 'required',
            'genero' => 'required',
            'velocidad' => 'required',
            'color_id' => 'required',
            'medida_id' => 'required',
            'material_id' => 'required',
            'img_url_header' => 'required',
            'modalidad_id' => 'required',
            'image_header' => 'required'
        ];
    }
}
