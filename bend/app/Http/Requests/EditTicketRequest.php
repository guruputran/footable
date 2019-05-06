<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditTicketRequest extends FormRequest
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
      'bet4d' => 'required',
      'big' => 'required|numeric',
      'small' => 'required|numeric',
      'IboxB' => 'required|numeric',
      'IboxS' => 'required|numeric'
    ];
  }
}
