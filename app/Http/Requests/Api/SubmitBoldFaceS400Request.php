<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class SubmitBoldFaceS400Request extends FormRequest
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
            'premise_1_1' => 'required|string',
            'answer_1_1' => 'required|string',
            'premise_1_2' => 'required|string',
            'answer_1_2' => 'required|string',
            'premise_1_3' => 'required|string',
            'answer_1_3' => 'required|string',
            'premise_2_1' => 'required|string',
            'answer_2_1' => 'required|string',
            'premise_2_2' => 'required|string',
            'answer_2_2' => 'required|string',
            'premise_2_3' => 'required|string',
            'answer_2_3' => 'required|string',
            'premise_2_4' => 'required|string',
            'answer_2_4' => 'required|string',
            'premise_3_1' => 'required|string',
            'answer_3_1' => 'required|string',
            'premise_3_2' => 'required|string',
            'answer_3_2' => 'required|string',
            'premise_3_3' => 'required|string',
            'answer_3_3' => 'required|string',
            'premise_3_4' => 'required|string',
            'answer_3_4' => 'required|string',
            'premise_3_5' => 'required|string',
            'answer_3_5' => 'required|string',
            'premise_4_1' => 'required|string',
            'answer_4_1' => 'required|string',
            'premise_4_2' => 'required|string',
            'answer_4_2' => 'required|string',
            'premise_4_3' => 'required|string',
            'answer_4_3' => 'required|string',
            'premise_4_4' => 'required|string',
            'answer_4_4' => 'required|string',
            'premise_5_1' => 'required|string',
            'answer_5_1' => 'required|string',
            'premise_5_2' => 'required|string',
            'answer_5_2' => 'required|string',
            'premise_5_3' => 'required|string',
            'answer_5_3' => 'required|string',
            'premise_6_1' => 'required|string',
            'answer_6_1' => 'required|string',
            'premise_6_2' => 'required|string',
            'answer_6_2' => 'required|string',
            'answer_7_1_1' => 'required|string',
            'answer_7_1_2' => 'required|string',
            'answer_7_1_3' => 'required|string',
            'answer_7_1_4' => 'required|string',
            'answer_7_1_5' => 'required|string',
            'answer_7_2_1' => 'required|string',
            'answer_7_2_2' => 'required|string',
            'answer_7_2_3' => 'required|string',
            'answer_7_3_1' => 'required|string',
            'answer_7_3_2' => 'required|string',
            'answer_7_3_3' => 'required|string',
            'answer_7_3_4' => 'required|string',
        ];
    }
}
