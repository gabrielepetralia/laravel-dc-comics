<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
          'title' => 'required|min:2|max:100',
          'series' => 'required|min:2|max:100',
          'type' => 'required|min:2|max:20',
          'sale_date' => 'required|date',
          'price' => 'required|min:4|max:10',
        ];
    }

  public function messages()
  {
    return [
      'title.required' => 'The title is a required field',
      'title.min' => 'The title must have at least :min characters',
      'title.max' => 'The title can\'t have more than :max characters',

      'series.required' => 'The series is a required field',
      'series.min' => 'The series must have at least :min characters',
      'series.max' => 'The series can\'t have more than :max characters',

      'type.required' => 'The type is a required field',
      'type.min' => 'The type must have at least :min characters',
      'type.max' => 'The type can\'t have more than :max characters',

      'sale_date.required' => 'The sale date is a required field',
      'sale_date.date' => 'The date must be a valid date (Ex : 2023-22-10)',

      'price.required' => 'The price is a required field',
      'price.min' => 'The price must have at least :min characters',
      'price.max' => 'The price can\'t have more than :max characters',
    ];
  }
}
