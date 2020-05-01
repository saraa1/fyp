<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidateSurveyRequest extends Request
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
            'responses.*.answer_id' => 'required',
            'name' => 'required',
            'responses.*.question_id' => 'required',
            'email' => 'required'];
    }
}
