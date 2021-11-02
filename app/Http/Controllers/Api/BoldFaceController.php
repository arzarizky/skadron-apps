<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\SubmitBoldFaceS200Request;
use App\Http\Requests\Api\SubmitBoldFaceS400Request;
use App\Models\BoldFace;
use Illuminate\Http\Request;
use PDF;

class BoldFaceController extends ApiController
{
    public function submitSeries200(SubmitBoldFaceS200Request $request)
    {
        if (strtoupper($request->premise_1_1) == "MASTER SWITCH" && strtoupper($request->answer_1_1) == "OFF" &&
        strtoupper($request->premise_1_2) == "APU" && strtoupper($request->answer_1_2) == "OFF & DISCONECTED" &&
        strtoupper($request->premise_2_1) == "FUEL SWITCH" && strtoupper($request->answer_2_1) == "CLOSED" &&
        strtoupper($request->premise_2_2) == "EMERGENCY SHUT DOWN LEVER" && strtoupper($request->answer_2_2) == "FEATHER" &&
        strtoupper($request->premise_2_3) == "FUEL BOOSTER PUMP" && strtoupper($request->answer_2_3) == "OFF" &&
        strtoupper($request->premise_2_4) == "FIRE DISCHARGE BUTTON" && strtoupper($request->answer_2_4) == "PRESS AS REQ" &&
        strtoupper($request->premise_3_1) == "POWER LEVERS" && strtoupper($request->answer_3_1) == "AFT OF FI" &&
        strtoupper($request->premise_3_2) == "CONTROL COLUMN" && strtoupper($request->answer_3_2) == "FULL FORWARD" &&
        strtoupper($request->premise_3_3) == "POWER LEVERS" && strtoupper($request->answer_3_3) == "GI" &&
        strtoupper($request->premise_3_4) == "BRAKES" && strtoupper($request->answer_3_4) == "APPLY AS REQ" &&
        strtoupper($request->premise_3_5) == "POWER LEVER" && strtoupper($request->answer_3_5) == "REVERSE AS REQ" &&
        strtoupper($request->premise_4_1) == "RPM LEVERS" && strtoupper($request->answer_4_1) == "T/O OR LAND" &&
        strtoupper($request->premise_4_2) == "POWER LEVERS" && strtoupper($request->answer_4_2) == "MAX EGT 650 C" &&
        strtoupper($request->premise_4_3) == "APR LIGHT" && strtoupper($request->answer_4_3) == "CX LIGHT ON" &&
        strtoupper($request->premise_4_4) == "IN OPERATIVE ENGINE" && strtoupper($request->answer_4_4) == "IDENTIFY" &&
        strtoupper($request->premise_4_5) == "EMERGENCY SHUT DOWN LEVER(FAILED)" && strtoupper($request->answer_4_5) == "FEATHER" &&
        strtoupper($request->premise_4_6) == "AIR SPEED" && strtoupper($request->answer_4_6) == "MAINT 94-96" &&
        strtoupper($request->premise_5_1) == "EMERGENCY SHUT DOWN LEVER" && strtoupper($request->answer_5_1) == "FEATHER" &&
        strtoupper($request->premise_5_2) == "FUEL BOOSTER PUMP" && strtoupper($request->answer_5_2) == "OFF" &&
        strtoupper($request->premise_5_3) == "FIRE DISCHARGE BUTTON" && strtoupper($request->answer_5_3) == "PRESS AS REQ" &&
        strtoupper($request->premise_6_1) == "EMERGENCY SHUT DOWN LEVER" && strtoupper($request->answer_6_1) == "FEATHER" &&
        strtoupper($request->answer_7_1) == "770" &&
        strtoupper($request->answer_7_2_1) == "650" && strtoupper($request->answer_7_2_2) == "100" &&
        strtoupper($request->answer_7_3_1) == "100" && strtoupper($request->answer_7_3_2) == "98" && strtoupper($request->answer_7_3_3) == "96" && strtoupper($request->answer_7_3_4) == "93" &&
        strtoupper($request->answer_7_4_1) == "200" && strtoupper($request->answer_7_4_2) == "146" && strtoupper($request->answer_7_4_3) == "85" && strtoupper($request->answer_7_4_4) == "90") {
            $boldface = BoldFace::create([
                'user_id' => auth('api')->user()->id,
                'type' => 'series-200'
            ]);
            return $this->successResponse($boldface, 'success');
        }
        return $this->clientErrorResponse(null, 'Data yang dimasukkan tidak sesuai');
    }

    public function submitSeries400(SubmitBoldFaceS400Request $request)
    {
        if (strtoupper($request->premise_1_1) == "FUEL VALVE" && strtoupper($request->answer_1_1) == "OFF" &&
        strtoupper($request->premise_1_2) == "FUEL BOOSTER PUMP" && strtoupper($request->answer_1_2) == "OFF" &&
        strtoupper($request->premise_1_3) == "HOLD TO CRANK" && strtoupper($request->answer_1_3) == "STBY" &&
        strtoupper($request->premise_2_1) == "EMERGENCY SHUT DOWN LEVER" && strtoupper($request->answer_2_1) == "FEATHER" &&
        strtoupper($request->premise_2_2) == "FUEL VALVE" && strtoupper($request->answer_2_2) == "OFF" &&
        strtoupper($request->premise_2_3) == "GENERATOR SWITCH" && strtoupper($request->answer_2_3) == "OFF" &&
        strtoupper($request->premise_2_4) == "FIRE DISCHARGE BUTTON" && strtoupper($request->answer_2_4) == "PUSHED" &&
        strtoupper($request->premise_3_1) == "POWER LEVERS" && strtoupper($request->answer_3_1) == "G.I." &&
        strtoupper($request->premise_3_2) == "CONTROL COLUMN" && strtoupper($request->answer_3_2) == "FORWARD" &&
        strtoupper($request->premise_3_3) == "BRAKES" && strtoupper($request->answer_3_3) == "APPLY AS REQ" &&
        strtoupper($request->premise_3_4) == "POWER LEVER (UNAFFECTED E/G)" && strtoupper($request->answer_3_4) == "REVERSE AS REQ" &&
        strtoupper($request->premise_3_5) == "CORRESPONDING EMERGENCY PROCEDURE" && strtoupper($request->answer_3_5) == "APPLIED" &&
        strtoupper($request->premise_4_1) == "EMERGENCY SHUT DOWN LEVER (AFFECTED E/G)" && strtoupper($request->answer_4_1) == "FEATHER" &&
        strtoupper($request->premise_4_2) == "APR ANNUNCIATION (AFFECTED E/G)" && strtoupper($request->answer_4_2) == "CHECKED ON" &&
        strtoupper($request->premise_4_3) == "AT VR ANNOUNCEMENT" && strtoupper($request->answer_4_3) == "ROTATED" &&
        strtoupper($request->premise_4_4) == "V2" && strtoupper($request->answer_4_4) == "ACHIEVED & MAINTAINED" &&
        strtoupper($request->premise_5_1) == "EMERGENCY SHUT DOWN LEVER (AFFECTED E/G)" && strtoupper($request->answer_5_1) == "FEATHER" &&
        strtoupper($request->premise_5_2) == "FUEL BOOSTER PUMPS (AFFECTED E/G)" && strtoupper($request->answer_5_2) == "OFF" &&
        strtoupper($request->premise_5_3) == "FIRE DISCHARGE BUTTON" && strtoupper($request->answer_5_3) == "PUSHED" &&
        strtoupper($request->premise_6_1) == "EMERGENCY SHUT DOWN LEVER" && strtoupper($request->answer_6_1) == "FEATHER" &&
        strtoupper($request->premise_6_2) == "FLAPS LEVER" && strtoupper($request->answer_6_2) == "UP" &&
        strtoupper($request->answer_7_1_1) == "776" && strtoupper($request->answer_7_1_2) == "750" && strtoupper($request->answer_7_1_3) == "650" && strtoupper($request->answer_7_1_4) == "650" && strtoupper($request->answer_7_1_5) == "685" &&
        strtoupper($request->answer_7_2_1) == "100" && strtoupper($request->answer_7_2_2) == "100" && strtoupper($request->answer_7_2_3) == "112" &&
        strtoupper($request->answer_7_3_1) == "101" && strtoupper($request->answer_7_3_2) == "101" && strtoupper($request->answer_7_3_3) == "105.5" && strtoupper($request->answer_7_3_4) == "94.5") {
            $boldface = BoldFace::create([
                'user_id' => auth('api')->user()->id,
                'type' => 'series-400'
            ]);
            return $this->successResponse($boldface, 'success');
        }
        return $this->clientErrorResponse(null, 'Data yang dimasukkan tidak sesuai');
    }

    public function downloadPdf(BoldFace $boldface)
    {
        if ($boldface->type == "series-200") {
            $pdf = PDF::loadview('pdf.bold-face.series-200', compact('boldface'));
    	    return $pdf->download('laporan-bold-face.pdf');
        }else{
            $pdf = PDF::loadview('pdf.bold-face.series-400', compact('boldface'));
    	    return $pdf->download('laporan-bold-face.pdf');
        }
    }
}
