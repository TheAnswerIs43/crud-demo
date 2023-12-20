<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMyuserRequest extends FormRequest
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
            'name' => 'required|max:50|min:2',
            'surname' => 'required|max:50|min:2',
            'email' => 'required|email|max:255|min:3',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'È richiesto un nome',
            'name.max' => 'Il nome è troppo lungo',
            'name.min' => 'Il nome è troppo corto',
            'surname.required' => 'È richiesto un cognome',
            'surname.max' => 'Il cognome è troppo lungo',
            'surname.min' => 'Il cognome è troppo corto',
            'email.required' => 'È necessario inserire una email',
            'email.max' => 'L\'Email inserita è troppo lunga',
            'email.min' => 'L\'Email inserita è troppo corta',
            'email.email' => 'Non è una email valida'
        ];
    }
}
