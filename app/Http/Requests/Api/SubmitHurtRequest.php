<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class SubmitHurtRequest extends FormRequest
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
            'management_planning' => 'required|string',
            'management_command_n_control' => 'required|string',
            'management_command_n_control_penugasan' => 'required|string',
            'management_command_n_control_waktu_terbang' => 'required|string',
            'management_sortie' => 'required|string',
            'management_working_hour' => 'required|string',
            'management_flying_hour' => 'required|string',
            'management_take_off_weight'=> 'required|string',
            'management_take_off_weight_berat'=> 'required|string',
            'machine_aircraft_type' => 'required|string',
            'machine_aircraft_status' => 'required|string',
            'mission' => 'required|string',
            'mission_kualifikasi_penerbang' => 'required|string',
            'media_weather' => 'required|string',
            'media_area_operation' => 'required|string',
            'media_area_operation_periode' => 'required|string',
            'media_aerodrome' => 'required|string',
            'media_aerodrome_periode' => 'required|string',
            'media_runway_condition' => 'required|string',
            'media_runway_length' => 'required|string',
            'media_terrain' => 'required|string',
            'man_qualification' => 'required|string',
            'man_crew_combination_pilot' => 'required|string',
            'man_crew_combination_kombinasi' => 'required|string',
            'man_crew_currency' => 'required|string',
            'man_crew_currency_last_flight' => 'required|string',
            'man_crew_test' => 'required|string',
            'man_crew_test_lama_istirahat' => 'required|string',
            'man_flying_hour' => 'required|string'
        ];
    }
}
