<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //Book
            'title'=>'required|string',
            'description'=>'required|string',
            'published_year'=>'integer',
            'pages'=>'integer',
            'cover_image'=>'required|string',

            //Author
            'authors'=>'required|array',
            'authors.*'=>'exists:authors,id',
        ];
    }
}
