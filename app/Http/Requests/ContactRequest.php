<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        switch($this->method()){
            case "POST":
                return [
                    'salutation' => 'required|max:5',
                    'name' => 'required|max:100',
                    'number' => 'required|max:15',
                    'email' => 'email|max:200|unique:contatos',
                    'birth' => 'date_format:"d/m/Y"',
                    'avatar' => 'nullable|sometimes|image|mimes:jpg,jpeg,png,gif'
                ];
                break;

            case "PUT":
                return [
                    'salutation' => 'required|max:5',
                    'name' => 'required|max:100',
                    'number' => 'required|max:15',
                    'email' => 'email|max:200|unique:contatos,email,'.$this->id,                    'birth' => 'date_format:"d/m/Y"',
                    'avatar' => 'nullable|sometimes|image|mimes:jpg,jpeg,png,gif'
                ];
                break;

            default:break;
        }
      
    }

    public function messages()
    {
        return [
            'salutation.required' => 'O campo Saudação é obrigatório',
            'nname.required' => 'O campo Nome é obrigatório',
            'email.email' => 'Informe um e-mail válido',
            'birth.date_format' => 'O campo data deve ser no formato DD/MM/AAAA'
        ];
    }
}
