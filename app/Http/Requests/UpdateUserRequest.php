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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return
        [
            'title'                             => ['required'],
            'first'                             => ['required'],
            'last'                              => ['required'],
            'gender'                            => ['required'],
            'age'                               => ['required','numeric'],
            'city'                              => ['required'],
            'state'                             => ['required'],
            'street_name'                       => ['required'],
            'street_number'                     => ['required','numeric'],
            'country'                           => ['required'],
            'postcode'                          => ['required','numeric'],
            'timezone_offset'                   => ['required'],
            'timezone_description'              => ['required'],
            'latitude'                          => ['required','numeric'],
            'longitude'                         => ['required','numeric']
        ];
    }
}
