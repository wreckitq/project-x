<?php

namespace Modules\Mission\Requests;

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
            'owner_id' => ['required'],
            'assignee_id' => [''],
            'status' => ['required'],
            'title' => ['required'],
            'description' => ['required'],
            'reward' => ['required'],
            'level' => ['required'],
            'due_date' => ['required'],
            'completion_date' => [''],
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
