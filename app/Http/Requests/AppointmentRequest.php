<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
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
            'civilite'  => 'required',
            'nom'       => 'required|string|min:3',
            'prenom'    => 'required|string|min:3',
            'email'     => 'required|email',
            'telephone' => 'required|numeric',
            'service'   => 'required',
            'date'      => 'required',
            'time'      => 'required'
        ];
    }
}
