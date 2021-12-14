<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class PetitionRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'content' => 'required|max:255',
            'id_tag'=>'required',
            'linkFile' => 'mimetypes:application/pdf,application/msword,application/vnd.ms-powerpoint,text/plain|max:10000'
        ];
    }
}
