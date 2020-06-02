<?php

namespace Modules\Training\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'trainer_id' => ['required'],
            'title' => ['required'],
            'description' => ['required'],
            'fee' => ['required'],
            'reward' => ['required'],
            'start_at' => ['required'],
            'tags' => [],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
