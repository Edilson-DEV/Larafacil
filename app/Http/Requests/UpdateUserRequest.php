<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            //
            'name'=>'required|min:3|max:15|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/ ',
            'email'=>'required|email|unique'

        ];


    }
    public function messages(){
        return [
            //
            'name.required'=>'El campo es requerido',
            'name.min'=>'El campo minimo debe ser de 3 letras',
            'name.max'=>'El campo maximo debe ser de 15 letras',
            'name.regex'=>'Solo se admite letras',
            'email.required'=>'Campo requerido',
            'email.email'=>'Debe ser de tipo email',
        ];


    }
}
