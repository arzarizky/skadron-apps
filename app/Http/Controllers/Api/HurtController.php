<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\SubmitHurtRequest;
use App\Models\Hurt;
use Illuminate\Http\Request;
use PDF;

class HurtController extends ApiController
{
    public function submit(SubmitHurtRequest $request)
    {
        //mangement planning
        $managementPlanning = $request->management_planning;
        $managementPlanningScore = 0;
        switch ($managementPlanning) {
            case 'SSI RENBANG':
                $managementPlanningScore = 1;
                break;
            case 'MISI DI LUAR RENBANG':
                $managementPlanningScore = 3;
                break;
            case 'MISI DADAKAN':
                $managementPlanningScore = 4;
                break;
        }

        //management command n control
        $managementCommandNControl = "";
        $managementCommandNControlScore = 0;
        if ($request->management_command_n_control == 'DAN SKADRON 4' && $request->management_command_n_control_penugasan == 'LATIHAN' && $request->management_command_n_control_waktu_terbang == 'DAY') {
            $managementCommandNControl = "DAN SKADRON 4, LATIHAN, DAY";
            $managementCommandNControlScore = 1;
        }
        if ($request->management_command_n_control == 'DAN SKADRON 4' && $request->management_command_n_control_penugasan == 'LATIHAN' && $request->management_command_n_control_waktu_terbang == 'NIGHT') {
            $managementCommandNControl = "DAN SKADRON 4, LATIHAN, NIGHT";
            $managementCommandNControlScore = 1;
        }
        if ($request->management_command_n_control == 'DAN SKADRON 4' && $request->management_command_n_control_penugasan == 'OPERASI' && $request->management_command_n_control_waktu_terbang == 'DAY') {
            $managementCommandNControl = "DAN SKADRON 4, OPERASI, DAY";
            $managementCommandNControlScore = 1;
        }
        if ($request->management_command_n_control == 'DAN SKADRON 4' && $request->management_command_n_control_penugasan == 'OPERASI' && $request->management_command_n_control_waktu_terbang == 'NIGHT') {
            $managementCommandNControl = "DAN SKADRON 4, OPERASI, NIGHT";
            $managementCommandNControlScore = 2;
        }
        if ($request->management_command_n_control == 'KASIOPS/DANFLIGHT' && $request->management_command_n_control_penugasan == 'LATIHAN' && $request->management_command_n_control_waktu_terbang == 'DAY') {
            $managementCommandNControl = "KASIOPS/DANFLIGHT, LATIHAN, DAY";
            $managementCommandNControlScore = 2;
        }
        if ($request->management_command_n_control == 'KASIOPS/DANFLIGHT' && $request->management_command_n_control_penugasan == 'LATIHAN' && $request->management_command_n_control_waktu_terbang == 'NIGHT') {
            $managementCommandNControl = "KASIOPS/DANFLIGHT, LATIHAN, NIGHT";
            $managementCommandNControlScore = 3;
        }
        if ($request->management_command_n_control == 'KASIOPS/DANFLIGHT' && $request->management_command_n_control_penugasan == 'OPERASI' && $request->management_command_n_control_waktu_terbang == 'DAY') {
            $managementCommandNControl = "KASIOPS/DANFLIGHT, OPERASI, DAY";
            $managementCommandNControlScore = 2;
        }
        if ($request->management_command_n_control == 'KASIOPS/DANFLIGHT' && $request->management_command_n_control_penugasan == 'OPERASI' && $request->management_command_n_control_waktu_terbang == 'NIGHT') {
            $managementCommandNControl = "KASIOPS/DANFLIGHT, OPERASI, NIGHT";
            $managementCommandNControlScore = 3;
        }


        //management sortie
        $managementSortie = $request->management_sortie;
        $managementSortieScore = 0;
        switch ($managementSortie) {
            case 'TRAINING 1-2':
                $managementSortieScore = 1;
                break;
            case 'TRAINING KE-3':
                $managementSortieScore = 2;
                break;
            case 'MISI DUKJUN 1-3':
                $managementSortieScore = 1;
                break;
            case 'MISI DUKJUN 4-5':
                $managementSortieScore = 2;
                break;
            case 'MISI LEG 1-5':
                $managementSortieScore = 1;
                break;
            case 'MISI LEG 6-8':
                $managementSortieScore = 2;
                break;
        }

        //management working hour
        $managementWorkingHour = $request->management_working_hour;
        $managementWorkingHourScore = 0;
        switch ($managementWorkingHour) {
            case '1-6 HOURS':
                $managementWorkingHourScore = 1;
                break;
            case '6-10 HOURS':
                $managementWorkingHourScore = 2;
                break;
            case '10-12 HOURS':
                $managementWorkingHourScore = 4;
                break;
            case '> 12 HOURS':
                $managementWorkingHourScore = 0;
                break;
        }

        //management flying hour
        $managementFlyingHour = $request->management_flying_hour;
        $managementFlyingHourScore = 0;
        switch ($managementFlyingHour) {
            case '1-4 HOURS':
                $managementFlyingHourScore = 1;
                break;
            case '4-7 HOURS':
                $managementFlyingHourScore = 2;
                break;
            case '7-8 HOURS':
                $managementFlyingHourScore = 3;
                break;
            case '> 8 HOURS':
                $managementFlyingHourScore = 0;
                break;
        }

        //management take off weight
        $managementTakeOffWeight = "";
        $managementTakeOffWeightScore = 0;
        if ($request->management_take_off_weight == 'C-212 200' && $request->management_take_off_weight_berat == '< 7.450 Kg') {
            $managementTakeOffWeight = "C-212 200, <7.450 Kg";
            $managementTakeOffWeightScore = 1;
        }
        if ($request->management_take_off_weight == 'C-212 200' && $request->management_take_off_weight_berat == '7.450 Kg < TOW < 7.550 Kg') {
            $managementTakeOffWeight = "C-212 200, 7.450 Kg < TOW < 7.550 Kg";
            $managementTakeOffWeightScore = 2;
        }
        if ($request->management_take_off_weight == 'C-212 200 (EFIS SYTM)' && $request->management_take_off_weight_berat == '< 7.700 Kg') {
            $managementTakeOffWeight = "C-212 200, <7.700 Kg";
            $managementTakeOffWeightScore = 1;
        }
        if ($request->management_take_off_weight == 'C-212 200 (EFIS SYTM)' && $request->management_take_off_weight_berat == '7.700 Kg < TOW < 7.800 Kg') {
            $managementTakeOffWeight = "C-212 200, 7.700 Kg < TOW < 7.800 Kg";
            $managementTakeOffWeightScore = 2;
        }

        //machine aircrat type
        $machineAircraftType = $request->machine_aircraft_type;
        $machineAircraftTypeScore = 0;
        switch ($machineAircraftType) {
            case 'C-212 200':
                $machineAircraftTypeScore = 1;
                break;
            case 'C-212 200 (EFIS SYTM)':
                $machineAircraftTypeScore = 2;
                break;
        }

        //machine aircraft status
        $machineAircraftStatus = $request->machine_aircraft_status;
        $machineAircraftStatusScore = 0;
        switch ($machineAircraftStatus) {
            case 'SERVICEABLE PENUH':
                $machineAircraftStatusScore = 1;
                break;
            case 'ADA T/S':
                $machineAircraftStatusScore = 2;
                break;
            case 'MAINTENANCE FLIGHT':
                $machineAircraftStatusScore = 3;
                break;
            case 'TEST FLIGHT':
                $machineAircraftStatusScore = 4;
                break;
            case 'HAR RINGAN':
                $machineAircraftStatusScore = 2;
                break;
            case 'HAR SEDANG':
                $machineAircraftStatusScore = 3;
                break;
            case 'HAR BERAT':
                $machineAircraftStatusScore = 4;
                break;
            case 'MODIFIKASI':
                $machineAircraftStatusScore = 4;
                break;
            case 'SUDAH 6-12 BLN TIDAK TERBANG':
                $machineAircraftStatusScore = 3;
                break;
            case 'LEBIH DARI 1 TAHUN TIDAK TERBANG':
                $machineAircraftStatusScore = 4;
                break;
            case 'NO GO ITEM':
                $machineAircraftStatusScore = 0;
                break;
        }

        //mission
        $mission = "";
        $missionScore = 0;
        switch ($request->mission) {
            case 'LOCAL TRN':
                switch ($request->mission_kualifikasi_penerbang) {
                    case 'A':
                        $mission = "LOCAL TRN, A";
                        $missionScore = 1;
                        break;
                    case 'B':
                        $mission = "LOCAL TRN, B";
                        $missionScore = 1;
                        break;
                    case 'C':
                        $mission = "LOCAL TRN, C";
                        $missionScore = 1;
                        break;
                    case 'D':
                        $mission = "LOCAL TRN, D";
                        $missionScore = 2;
                        break;
                    case 'E':
                        $mission = "LOCAL TRN, E";
                        $missionScore = 3;
                        break;
                }
                break;
            case 'NIGHT FLIGHT':
                switch ($request->mission_kualifikasi_penerbang) {
                    case 'A':
                        $mission = "NIGHT FLIGHT, A";
                        $missionScore = 1;
                        break;
                    case 'B':
                        $mission = "NIGHT FLIGHT, B";
                        $missionScore = 2;
                        break;
                    case 'C':
                        $mission = "NIGHT FLIGHT, C";
                        $missionScore = 2;
                        break;
                    case 'D':
                        $mission = "NIGHT FLIGHT, D";
                        $missionScore = 3;
                        break;
                    case 'E':
                        $mission = "NIGHT FLIGHT, E";
                        $missionScore = 4;
                        break;
                }
                break;
            case 'FORMATION DROP':
                switch ($request->mission_kualifikasi_penerbang) {
                    case 'A':
                        $mission = "FORMATION DROP, A";
                        $missionScore = 2;
                        break;
                    case 'B':
                        $mission = "FORMATION DROP, B";
                        $missionScore = 3;
                        break;
                    case 'C':
                        $mission = "FORMATION DROP, C";
                        $missionScore = 3;
                        break;
                    case 'D':
                        $mission = "FORMATION DROP, D";
                        $missionScore = 4;
                        break;
                    case 'E':
                        $mission = "FORMATION DROP, E";
                        $missionScore = 4;
                        break;
                }
                break;
            case 'FORMATION':
                switch ($request->mission_kualifikasi_penerbang) {
                    case 'A':
                        $mission = "FORMATION, A";
                        $missionScore = 1;
                        break;
                    case 'B':
                        $mission = "FORMATION, B";
                        $missionScore = 2;
                        break;
                    case 'C':
                        $mission = "FORMATION, C";
                        $missionScore = 3;
                        break;
                    case 'D':
                        $mission = "FORMATION, D";
                        $missionScore = 3;
                        break;
                    case 'E':
                        $mission = "FORMATION, E";
                        $missionScore = 3;
                        break;
                }
                break;
            case 'LOW LEVEL FORM':
                switch ($request->mission_kualifikasi_penerbang) {
                    case 'A':
                        $mission = "LOW LEVEL FORM, A";
                        $missionScore = 1;
                        break;
                    case 'B':
                        $mission = "LOW LEVEL FORM, B";
                        $missionScore = 2;
                        break;
                    case 'C':
                        $mission = "LOW LEVEL FORM, C";
                        $missionScore = 3;
                        break;
                    case 'D':
                        $mission = "LOW LEVEL FORM, D";
                        $missionScore = 4;
                        break;
                    case 'E':
                        $mission = "LOW LEVEL FORM, E";
                        $missionScore = 4;
                        break;
                }
                break;
            case 'LL DROP HB/SSDS':
                switch ($request->mission_kualifikasi_penerbang) {
                    case 'A':
                        $mission = "LL DROP HB/SSDS, A";
                        $missionScore = 1;
                        break;
                    case 'B':
                        $mission = "LL DROP HB/SSDS, B";
                        $missionScore = 2;
                        break;
                    case 'C':
                        $mission = "LL DROP HB/SSDS, C";
                        $missionScore = 3;
                        break;
                    case 'D':
                        $mission = "LL DROP HB/SSDS, D";
                        $missionScore = 3;
                        break;
                    case 'E':
                        $mission = "LL DROP HB/SSDS, E";
                        $missionScore = 3;
                        break;
                }
                break;
            case 'PERS DROP/DUKJUN':
                switch ($request->mission_kualifikasi_penerbang) {
                    case 'A':
                        $mission = "PERS DROP/DUKJUN, A";
                        $missionScore = 1;
                        break;
                    case 'B':
                        $mission = "PERS DROP/DUKJUN, B";
                        $missionScore = 1;
                        break;
                    case 'C':
                        $mission = "PERS DROP/DUKJUN, C";
                        $missionScore = 1;
                        break;
                    case 'D':
                        $mission = "PERS DROP/DUKJUN, D";
                        $missionScore = 2;
                        break;
                    case 'E':
                        $mission = "PERS DROP/DUKJUN, E";
                        $missionScore = 2;
                        break;
                }
                break;
            case 'FOTO FLIGHT':
                switch ($request->mission_kualifikasi_penerbang) {
                    case 'A':
                        $mission = "FOTO FLIGHT, A";
                        $missionScore = 1;
                        break;
                    case 'B':
                        $mission = "FOTO FLIGHT, B";
                        $missionScore = 1;
                        break;
                    case 'C':
                        $mission = "FOTO FLIGHT, C";
                        $missionScore = 1;
                        break;
                    case 'D':
                        $mission = "FOTO FLIGHT, D";
                        $missionScore = 2;
                        break;
                    case 'E':
                        $mission = "FOTO FLIGHT, E";
                        $missionScore = 2;
                        break;
                }
                break;
            case 'AIR LANDED':
                switch ($request->mission_kualifikasi_penerbang) {
                    case 'A':
                        $mission = "AIR LANDED, A";
                        $missionScore = 1;
                        break;
                    case 'B':
                        $mission = "AIR LANDED, B";
                        $missionScore = 1;
                        break;
                    case 'C':
                        $mission = "AIR LANDED, C";
                        $missionScore = 2;
                        break;
                    case 'D':
                        $mission = "AIR LANDED, D";
                        $missionScore = 3;
                        break;
                    case 'E':
                        $mission = "AIR LANDED, E";
                        $missionScore = 3;
                        break;
                }
                break;
            case 'VVIP':
                switch ($request->mission_kualifikasi_penerbang) {
                    case 'A':
                        $mission = "VVIP, A";
                        $missionScore = 1;
                        break;
                    case 'B':
                        $mission = "VVIP, B";
                        $missionScore = 0;
                        break;
                    case 'C':
                        $mission = "VVIP, C";
                        $missionScore = 0;
                        break;
                    case 'D':
                        $mission = "VVIP, D";
                        $missionScore = 0;
                        break;
                    case 'E':
                        $mission = "VVIP, E";
                        $missionScore = 0;
                        break;
                }
                break;
            case 'VIP':
                switch ($request->mission_kualifikasi_penerbang) {
                    case 'A':
                        $mission = "VIP, A";
                        $missionScore = 1;
                        break;
                    case 'B':
                        $mission = "VIP, B";
                        $missionScore = 2;
                        break;
                    case 'C':
                        $mission = "VIP, C";
                        $missionScore = 0;
                        break;
                    case 'D':
                        $mission = "VIP, D";
                        $missionScore = 0;
                        break;
                    case 'E':
                        $mission = "VIP, E";
                        $missionScore = 0;
                        break;
                }
                break;
            case 'SPECIAL FLIGHT':
                switch ($request->mission_kualifikasi_penerbang) {
                    case 'A':
                        $mission = "SPECIAL FLIGHT, A";
                        $missionScore = 1;
                        break;
                    case 'B':
                        $mission = "SPECIAL FLIGHT, B";
                        $missionScore = 2;
                        break;
                    case 'C':
                        $mission = "SPECIAL FLIGHT, C";
                        $missionScore = 3;
                        break;
                    case 'D':
                        $mission = "SPECIAL FLIGHT, D";
                        $missionScore = 3;
                        break;
                    case 'E':
                        $mission = "SPECIAL FLIGHT, E";
                        $missionScore = 3;
                        break;
                }
                break;
            case 'UJI FUNGSI':
                switch ($request->mission_kualifikasi_penerbang) {
                    case 'A':
                        $mission = "UJI FUNGSI, A";
                        $missionScore = 1;
                        break;
                    case 'B':
                        $mission = "UJI FUNGSI, B";
                        $missionScore = 0;
                        break;
                    case 'C':
                        $mission = "UJI FUNGSI, C";
                        $missionScore = 0;
                        break;
                    case 'D':
                        $mission = "UJI FUNGSI, D";
                        $missionScore = 0;
                        break;
                    case 'E':
                        $mission = "UJI FUNGSI, E";
                        $missionScore = 0;
                        break;
                }
                break;
            case 'PROF CX PHASE I':
                switch ($request->mission_kualifikasi_penerbang) {
                    case 'A':
                        $mission = "PROF CX PHASE I, A";
                        $missionScore = 1;
                        break;
                    case 'B':
                        $mission = "PROF CX PHASE I, B";
                        $missionScore = 0;
                        break;
                    case 'C':
                        $mission = "PROF CX PHASE I, C";
                        $missionScore = 0;
                        break;
                    case 'D':
                        $mission = "PROF CX PHASE I, D";
                        $missionScore = 0;
                        break;
                    case 'E':
                        $mission = "PROF CX PHASE I, E";
                        $missionScore = 0;
                        break;
                }
                break;
            case 'PROF CX PHASE II':
                switch ($request->mission_kualifikasi_penerbang) {
                    case 'A':
                        $mission = "PROF CX PHASE II, A";
                        $missionScore = 1;
                        break;
                    case 'B':
                        $mission = "PROF CX PHASE II, B";
                        $missionScore = 0;
                        break;
                    case 'C':
                        $mission = "PROF CX PHASE II, C";
                        $missionScore = 0;
                        break;
                    case 'D':
                        $mission = "PROF CX PHASE II, D";
                        $missionScore = 0;
                        break;
                    case 'E':
                        $mission = "PROF CX PHASE II, E";
                        $missionScore = 0;
                        break;
                }
                break;
            case 'DEMO PROF':
                switch ($request->mission_kualifikasi_penerbang) {
                    case 'A':
                        $mission = "DEMO PROF, A";
                        $missionScore = 1;
                        break;
                    case 'B':
                        $mission = "DEMO PROF, B";
                        $missionScore = 1;
                        break;
                    case 'C':
                        $mission = "DEMO PROF, C";
                        $missionScore = 2;
                        break;
                    case 'D':
                        $mission = "DEMO PROF, D";
                        $missionScore = 0;
                        break;
                    case 'E':
                        $mission = "DEMO PROF, E";
                        $missionScore = 0;
                        break;
                }
                break;
            case 'FERRY FLT':
                switch ($request->mission_kualifikasi_penerbang) {
                    case 'A':
                        $mission = "FERRY FLT, A";
                        $missionScore = 1;
                        break;
                    case 'B':
                        $mission = "FERRY FLT, B";
                        $missionScore = 1;
                        break;
                    case 'C':
                        $mission = "FERRY FLT, C";
                        $missionScore = 1;
                        break;
                    case 'D':
                        $mission = "FERRY FLT, D";
                        $missionScore = 1;
                        break;
                    case 'E':
                        $mission = "FERRY FLT, E";
                        $missionScore = 1;
                        break;
                }
                break;
            case 'BW BARANG/CARGO':
                switch ($request->mission_kualifikasi_penerbang) {
                    case 'A':
                        $mission = "BW BARANG/CARGO, A";
                        $missionScore = 1;
                        break;
                    case 'B':
                        $mission = "BW BARANG/CARGO, B";
                        $missionScore = 1;
                        break;
                    case 'C':
                        $mission = "BW BARANG/CARGO, C";
                        $missionScore = 1;
                        break;
                    case 'D':
                        $mission = "BW BARANG/CARGO, D";
                        $missionScore = 2;
                        break;
                    case 'E':
                        $mission = "BW BARANG/CARGO, E";
                        $missionScore = 2;
                        break;
                }
                break;
            case 'BW PENUMPANG':
                switch ($request->mission_kualifikasi_penerbang) {
                    case 'A':
                        $mission = "BW PENUMPANG, A";
                        $missionScore = 1;
                        break;
                    case 'B':
                        $mission = "BW PENUMPANG, B";
                        $missionScore = 1;
                        break;
                    case 'C':
                        $mission = "BW PENUMPANG, C";
                        $missionScore = 1;
                        break;
                    case 'D':
                        $mission = "BW PENUMPANG, D";
                        $missionScore = 2;
                        break;
                    case 'E':
                        $mission = "BW PENUMPANG, E";
                        $missionScore = 2;
                        break;
                }
                break;
            case 'FLYPAST (PLANNED)':
                switch ($request->mission_kualifikasi_penerbang) {
                    case 'A':
                        $mission = "FLYPAST (PLANNED), A";
                        $missionScore = 1;
                        break;
                    case 'B':
                        $mission = "FLYPAST (PLANNED), B";
                        $missionScore = 2;
                        break;
                    case 'C':
                        $mission = "FLYPAST (PLANNED), C";
                        $missionScore = 3;
                        break;
                    case 'D':
                        $mission = "FLYPAST (PLANNED), D";
                        $missionScore = 3;
                        break;
                    case 'E':
                        $mission = "FLYPAST (PLANNED), E";
                        $missionScore = 3;
                        break;
                }
                break;
            case 'FLYPAST (UNPLANNED)':
                switch ($request->mission_kualifikasi_penerbang) {
                    case 'A':
                        $mission = "FLYPAST (UNPLANNED), A";
                        $missionScore = 3;
                        break;
                    case 'B':
                        $mission = "FLYPAST (UNPLANNED), B";
                        $missionScore = 4;
                        break;
                    case 'C':
                        $mission = "FLYPAST (UNPLANNED), C";
                        $missionScore = 4;
                        break;
                    case 'D':
                        $mission = "FLYPAST (UNPLANNED), D";
                        $missionScore = 0;
                        break;
                    case 'E':
                        $mission = "FLYPAST (UNPLANNED), E";
                        $missionScore = 0;
                        break;
                }
                break;
            case 'EIS':
                switch ($request->mission_kualifikasi_penerbang) {
                    case 'A':
                        $mission = "EIS, A";
                        $missionScore = 1;
                        break;
                    case 'B':
                        $mission = "EIS, B";
                        $missionScore = 1;
                        break;
                    case 'C':
                        $mission = "EIS, C";
                        $missionScore = 1;
                        break;
                    case 'D':
                        $mission = "EIS, D";
                        $missionScore = 2;
                        break;
                    case 'E':
                        $mission = "EIS, E";
                        $missionScore = 2;
                        break;
                }
                break;
            case 'TMC':
                switch ($request->mission_kualifikasi_penerbang) {
                    case 'A':
                        $mission = "TMC, A";
                        $missionScore = 1;
                        break;
                    case 'B':
                        $mission = "TMC, B";
                        $missionScore = 2;
                        break;
                    case 'C':
                        $mission = "TMC, C";
                        $missionScore = 2;
                        break;
                    case 'D':
                        $mission = "TMC, D";
                        $missionScore = 2;
                        break;
                    case 'E':
                        $mission = "TMC, E";
                        $missionScore = 2;
                        break;
                }
                break;
            case 'TEST LANDING':
                switch ($request->mission_kualifikasi_penerbang) {
                    case 'A':
                        $mission = "TEST LANDING, A";
                        $missionScore = 2;
                        break;
                    case 'B':
                        $mission = "TEST LANDING, B";
                        $missionScore = 2;
                        break;
                    case 'C':
                        $mission = "TEST LANDING, C";
                        $missionScore = 0;
                        break;
                    case 'D':
                        $mission = "TEST LANDING, D";
                        $missionScore = 0;
                        break;
                    case 'E':
                        $mission = "TEST LANDING, E";
                        $missionScore = 0;
                        break;
                }
                break;
            case 'LATMA':
                switch ($request->mission_kualifikasi_penerbang) {
                    case 'A':
                        $mission = "LATMA, A";
                        $missionScore = 1;
                        break;
                    case 'B':
                        $mission = "LATMA, B";
                        $missionScore = 1;
                        break;
                    case 'C':
                        $mission = "LATMA, C";
                        $missionScore = 2;
                        break;
                    case 'D':
                        $mission = "LATMA, D";
                        $missionScore = 0;
                        break;
                    case 'E':
                        $mission = "LATMA, E";
                        $missionScore = 0;
                        break;
                }
                break;
        }

        //media weather
        $mediaWeather = $request->media_weather;
        $mediaWeatherScore = 0;
        switch ($mediaWeather) {
            case 'VMC':
                $mediaWeather = "VMC";
                $mediaWeatherScore = 1;
                break;
            case 'IMC':
                $mediaWeather = "IMC";
                $mediaWeatherScore = 2;
                break;
            case 'VIS 2000 - BLW MINIMA':
                $mediaWeather = "VIS 2000 - BLW MINIMA";
                $mediaWeatherScore = 4;
                break;
            case 'WX BLW MINIMA':
                $mediaWeather = "WX BLW MINIMA";
                $mediaWeatherScore = 0;
                break;
        }

        //media area operation
        $mediaAreaOperation = "";
        $mediaAreaOperationScore = 0;
        switch ($request->media_area_operation) {
            case 'SIANG':
                switch ($request->media_area_operation_periode) {
                    case '< 1 BLN':
                        $mediaAreaOperation = "SIANG, < 1 BLN";
                        $mediaAreaOperationScore = 1;
                        break;
                    case '1-3':
                        $mediaAreaOperation = "SIANG, 1-3";
                        $mediaAreaOperationScore = 2;
                        break;
                    case '> 3 BLN':
                        $mediaAreaOperation = "SIANG, > 3 BLN";
                        $mediaAreaOperationScore = 3;
                        break;
                    case '1ST TIME':
                        $mediaAreaOperation = "SIANG, 1ST TIME";
                        $mediaAreaOperationScore = 3;
                        break;
                }
                break;
            case 'MALAM':
                switch ($request->media_area_operation_periode) {
                    case '< 1 BLN':
                        $mediaAreaOperation = "MALAM, < 1 BLN";
                        $mediaAreaOperationScore = 2;
                        break;
                    case '1-3':
                        $mediaAreaOperation = "MALAM, 1-3";
                        $mediaAreaOperationScore = 3;
                        break;
                    case '> 3 BLN':
                        $mediaAreaOperation = "MALAM, > 3 BLN";
                        $mediaAreaOperationScore = 4;
                        break;
                    case '1ST TIME':
                        $mediaAreaOperation = "MALAM, 1ST TIME";
                        $mediaAreaOperationScore = 4;
                        break;
                }
                break;
        }


        //media aerodrome
        $mediaAerodrome = "";
        $mediaAerodromeScore = 0;
        switch ($request->media_aerodrome) {
            case 'SPECIFIC':
                switch ($request->media_aerodrome_periode) {
                    case '1-3 BLN':
                        $mediaAerodrome = "SPECIFIC, 1-3 BLN";
                        $mediaAerodromeScore = 1;
                        break;
                    case '3-6 BLN':
                        $mediaAerodrome = "SPECIFIC, 3-6 BLN";
                        $mediaAerodromeScore = 2;
                        break;
                    case '> 6 BLN':
                        $mediaAerodrome = "SPECIFIC, > 6 BLN";
                        $mediaAerodromeScore = 3;
                        break;
                }
                break;
        }

        //media runway condition
        $mediaRunwayCondition = $request->media_runway_condition;
        $mediaRunwayConditionScore = 0;
        switch ($mediaRunwayCondition) {
            case 'KERING':
                $mediaRunwayConditionScore = 1;
                break;
            case 'BASAH':
                $mediaRunwayConditionScore = 2;
                break;
            case 'TERGENANG AIR':
                $mediaRunwayConditionScore = 4;
                break;
            case 'UNPAVEMENT':
                $mediaRunwayConditionScore = 4;
                break;
            case 'UNPAVEMENT BASAH':
                $mediaRunwayConditionScore = 0;
                break;
        }

        //media runway length
        $mediaRunwayLength = $request->media_runway_length;
        $mediaRunwayLengthScore = 0;
        switch ($mediaRunwayLength) {
            case '>1600 M':
                $mediaRunwayLengthScore = 1;
                break;
            case '1200-1400 M':
                $mediaRunwayLengthScore = 2;
                break;
            case '1100-1200 M':
                $mediaRunwayLengthScore = 3;
                break;
            case '1000-700 M':
                $mediaRunwayLengthScore = 4;
                break;
            case '<700 M':
                $mediaRunwayLengthScore = 0;
                break;
        }

        //media terrain
        $mediaTerrain = $request->media_terrain;
        $mediaTerrainScore = 0;
        switch ($mediaTerrain) {
            case 'FLAT/NO TERRAIN':
                $mediaTerrainScore = 1;
                break;
            case 'BERBUKIT':
                $mediaTerrainScore = 3;
                break;
            case 'OCA > 3':
                $mediaTerrainScore = 4;
                break;
        }

        //man qualification
        $manQualification = $request->man_qualification;
        $manQualificationScore = 0;
        switch ($manQualification) {
            case 'A':
                $manQualificationScore = 1;
                break;
            case 'B':
                $manQualificationScore = 1;
                break;
            case 'C':
                $manQualificationScore = 2;
                break;
            case 'D':
                $manQualificationScore = 3;
                break;
            case 'E':
                $manQualificationScore = 4;
                break;
        }

        //man crew combination pilot
        $manCrewCombinationPilot = "";
        $manCrewCombinationPilotScore = 0;
        switch ($request->man_crew_combination_pilot) {
            case 'IP/CX PILOT':
                switch ($request->man_crew_combination_kombinasi) {
                    case 'CP - IJMU - ILM':
                        $manCrewCombinationPilot = "IP/CX PILOT, CP - IJMU - ILM";
                        $manCrewCombinationPilotScore = 1;
                        break;
                    case 'CP - JMU/BR - LM':
                        $manCrewCombinationPilot = "IP/CX PILOT, CP - JMU/BR - LM";
                        $manCrewCombinationPilotScore = 1;
                        break;
                    case 'BR - IJMU - ILM':
                        $manCrewCombinationPilot = "IP/CX PILOT, BR - IJMU - ILM";
                        $manCrewCombinationPilotScore = 2;
                        break;
                    case 'BR - JMU/BR - LM':
                        $manCrewCombinationPilot = "IP/CX PILOT, BR - JMU/BR - LM";
                        $manCrewCombinationPilotScore = 2;
                        break;
                    case 'L/S - IJMU - ILM':
                        $manCrewCombinationPilot = "IP/CX PILOT, L/S - IJMU - ILM";
                        $manCrewCombinationPilotScore = 2;
                        break;
                    case 'L/S - JMU/BR - LM':
                        $manCrewCombinationPilot = "IP/CX PILOT, L/S - JMU/BR - LM";
                        $manCrewCombinationPilotScore = 2;
                        break;
                    case 'R/S - IJMU - ILM':
                        $manCrewCombinationPilot = "IP/CX PILOT, R/S - IJMU - ILM";
                        $manCrewCombinationPilotScore = 2;
                        break;
                    case 'R/S - JMU/BR - LM':
                        $manCrewCombinationPilot = "IP/CX PILOT, R/S - JMU/BR - LM";
                        $manCrewCombinationPilotScore = 2;
                        break;
                }
                break;
            case 'CAPT PILOT':
                switch ($request->man_crew_combination_kombinasi) {
                    case 'CP - IJMU - ILM':
                        $manCrewCombinationPilot = "CAPT PILOT, CP - IJMU - ILM";
                        $manCrewCombinationPilotScore = 2;
                        break;
                    case 'CP - JMU/BR - LM':
                        $manCrewCombinationPilot = "CAPT PILOT, CP - JMU/BR - LM";
                        $manCrewCombinationPilotScore = 2;
                        break;
                    case 'BR - IJMU - ILM':
                        $manCrewCombinationPilot = "CAPT PILOT, BR - IJMU - ILM";
                        $manCrewCombinationPilotScore = 2;
                        break;
                    case 'BR - JMU/BR - LM':
                        $manCrewCombinationPilot = "CAPT PILOT, BR - JMU/BR - LM";
                        $manCrewCombinationPilotScore = 2;
                        break;
                    case 'L/S - IJMU - ILM':
                        $manCrewCombinationPilot = "CAPT PILOT, L/S - IJMU - ILM";
                        $manCrewCombinationPilotScore = 3;
                        break;
                    case 'L/S - JMU/BR - LM':
                        $manCrewCombinationPilot = "CAPT PILOT, L/S - JMU/BR - LM";
                        $manCrewCombinationPilotScore = 3;
                        break;
                    case 'R/S - IJMU - ILM':
                        $manCrewCombinationPilot = "CAPT PILOT, R/S - IJMU - ILM";
                        $manCrewCombinationPilotScore = 3;
                        break;
                    case 'R/S - JMU/BR - LM':
                        $manCrewCombinationPilot = "CAPT PILOT, R/S - JMU/BR - LM";
                        $manCrewCombinationPilotScore = 3;
                        break;
                }
                break;
            case 'CAPT BR':
                switch ($request->man_crew_combination_kombinasi) {
                    case 'BR IJMU ILM':
                        $manCrewCombinationPilot = "CAPT BR, BR IJMU ILM";
                        $manCrewCombinationPilotScore = 3;
                        break;
                    case 'BR JMU/BR LM':
                        $manCrewCombinationPilot = "CAPT BR, BR JMU/BR LM";
                        $manCrewCombinationPilotScore = 4;
                }
                break;
        }

        //man crew currency
        $manCrewCurrency = "";
        $manCrewCurrencyScore = 0;
        switch ($request->man_crew_currency) {
            case 'A':
                switch ($request->man_crew_currency_last_flight) {
                    case '1-7 HARI':
                        $manCrewCurrency = "A, 1-7 HARI";
                        $manCrewCurrencyScore = 1;
                        break;
                    case '8-14 HARI':
                        $manCrewCurrency = "A, 8-14 HARI";
                        $manCrewCurrencyScore = 1;
                        break;
                    case '15-21 HARI':
                        $manCrewCurrency = "A, 15-21 HARI";
                        $manCrewCurrencyScore = 2;
                        break;
                    case '22-28 HARI':
                        $manCrewCurrency = "A, 22-28 HARI";
                        $manCrewCurrencyScore = 2;
                        break;
                    case '> 29 HARI':
                        $manCrewCurrency = "A, > 29 HARI";
                        $manCrewCurrencyScore = 3;
                        break;
                }
                break;
            case 'B':
                switch ($request->man_crew_currency_last_flight) {
                    case '1-7 HARI':
                        $manCrewCurrency = "B, 1-7 HARI";
                        $manCrewCurrencyScore = 1;
                        break;
                    case '8-14 HARI':
                        $manCrewCurrency = "B, 8-14 HARI";
                        $manCrewCurrencyScore = 1;
                        break;
                    case '15-21 HARI':
                        $manCrewCurrency = "B, 15-21 HARI";
                        $manCrewCurrencyScore = 2;
                        break;
                    case '22-28 HARI':
                        $manCrewCurrency = "B, 22-28 HARI";
                        $manCrewCurrencyScore = 2;
                        break;
                    case '> 29 HARI':
                        $manCrewCurrency = "B, > 29 HARI";
                        $manCrewCurrencyScore = 3;
                        break;
                }
                break;
            case 'C':
                switch ($request->man_crew_currency_last_flight) {
                    case '1-7 HARI':
                        $manCrewCurrency = "C, 1-7 HARI";
                        $manCrewCurrencyScore = 1;
                        break;
                    case '8-14 HARI':
                        $manCrewCurrency = "C, 8-14 HARI";
                        $manCrewCurrencyScore = 2;
                        break;
                    case '15-21 HARI':
                        $manCrewCurrency = "C, 15-21 HARI";
                        $manCrewCurrencyScore = 3;
                        break;
                    case '22-28 HARI':
                        $manCrewCurrency = "C, 22-28 HARI";
                        $manCrewCurrencyScore = 4;
                        break;
                    case '> 29 HARI':
                        $manCrewCurrency = "C, > 29 HARI";
                        $manCrewCurrencyScore = 4;
                        break;
                }
                break;
            case 'D':
                switch ($request->man_crew_currency_last_flight) {
                    case '1-7 HARI':
                        $manCrewCurrency = "D, 1-7 HARI";
                        $manCrewCurrencyScore = 2;
                        break;
                    case '8-14 HARI':
                        $manCrewCurrency = "D, 8-14 HARI";
                        $manCrewCurrencyScore = 3;
                        break;
                    case '15-21 HARI':
                        $manCrewCurrency = "D, 15-21 HARI";
                        $manCrewCurrencyScore = 4;
                        break;
                    case '22-28 HARI':
                        $manCrewCurrency = "D, 22-28 HARI";
                        $manCrewCurrencyScore = 4;
                        break;
                    case '> 29 HARI':
                        $manCrewCurrency = "D, > 29 HARI";
                        $manCrewCurrencyScore = 4;
                        break;
                }
                break;
            case 'E':
                switch ($request->man_crew_currency_last_flight) {
                    case '1-7 HARI':
                        $manCrewCurrency = "E, 1-7 HARI";
                        $manCrewCurrencyScore = 3;
                        break;
                    case '8-14 HARI':
                        $manCrewCurrency = "E, 8-14 HARI";
                        $manCrewCurrencyScore = 4;
                        break;
                    case '15-21 HARI':
                        $manCrewCurrency = "E, 15-21 HARI";
                        $manCrewCurrencyScore = 5;
                        break;
                    case '22-28 HARI':
                        $manCrewCurrency = "E, 22-28 HARI";
                        $manCrewCurrencyScore = 5;
                        break;
                    case '> 29 HARI':
                        $manCrewCurrency = "E, > 29 HARI";
                        $manCrewCurrencyScore = 5;
                        break;
                }
                break;
        }

        //man crew test
        $manCrewTest = "";
        $manCrewTestScore = 0;
        switch ($request->man_crew_test) {
            case 'RUMAH/MESS':
                switch ($request->man_crew_test_lama_istirahat) {
                    case '> 8 JAM':
                        $manCrewTest = "RUMAH/MESS, > 8 JAM";
                        $manCrewTestScore = 1;
                        break;
                    case '5-8 JAM':
                        $manCrewTest = "RUMAH/MESS, 5-8 JAM";
                        $manCrewTestScore = 1;
                        break;
                    case '< 5 JAM':
                        $manCrewTest = "RUMAH/MESS, < 5 JAM";
                        $manCrewTestScore = 2;
                        break;
                }
                break;
            case 'PANGKALAN':
                switch ($request->man_crew_test_lama_istirahat) {
                    case '> 8 JAM':
                        $manCrewTest = "PANGKALAN, > 8 JAM";
                        $manCrewTestScore = 2;
                        break;
                    case '5-8 JAM':
                        $manCrewTest = "PANGKALAN, 5-8 JAM";
                        $manCrewTestScore = 3;
                        break;
                    case '< 5 JAM':
                        $manCrewTest = "PANGKALAN, < 5 JAM";
                        $manCrewTestScore = 4;
                        break;
                }
                break;
            case 'LAPANGAN':
                switch ($request->man_crew_test_lama_istirahat) {
                    case '> 8 JAM':
                        $manCrewTest = "LAPANGAN, > 8 JAM";
                        $manCrewTestScore = 3;
                        break;
                    case '5-8 JAM':
                        $manCrewTest = "LAPANGAN, 5-8 JAM";
                        $manCrewTestScore = 4;
                        break;
                    case '< 5 JAM':
                        $manCrewTest = "LAPANGAN, < 5 JAM";
                        $manCrewTestScore = 5;
                        break;
                }
                break;
        }

        //man flying hour
        $manFlyingHour = $request->man_flying_hour;
        $manFlyingHourScore = 0;
        switch ($manFlyingHour) {
            case '0 - 30 Hrs':
                $manFlyingHourScore = 1;
                break;
            case '31 - 36 Hrs':
                $manFlyingHourScore = 2;
                break;
            case '>36 Hrs':
                $manFlyingHourScore = 0;
                break;
        }

        // check apakah ada no go item
        // $total = 0;
        // if ($managementPlanningScore != 0 && $managementCommandNControlScore != 0 && 
        //     $managementSortieScore != 0 && $managementWorkingHourScore != 0 && 
        //     $managementFlyingHourScore != 0 && $managementTakeOffWeightScore != 0 && 
        //     $machineAircraftTypeScore != 0 && $machineAircraftStatusScore != 0 && 
        //     $missionScore != 0 && $mediaWeatherScore != 0 && 
        //     $mediaAreaOperationScore != 0 && $mediaAerodromeScore != 0 && 
        //     $mediaRunwayConditionScore != 0 && $mediaRunwayLengthScore != 0 && 
        //     $mediaTerrainScore != 0 && $manQualificationScore != 0 && 
        //     $manCrewCombinationPilotScore != 0 && $manCrewCurrencyScore != 0 && 
        //     $manCrewTestScore != 0 && $manFlyingHourScore != 0) {

            $total = $managementPlanningScore + $managementCommandNControlScore + 
                $managementSortieScore + $managementWorkingHourScore + 
                $managementFlyingHourScore + $managementTakeOffWeightScore + 
                $machineAircraftTypeScore + $machineAircraftStatusScore + 
                $missionScore + $mediaWeatherScore + 
                $mediaAreaOperationScore + $mediaAerodromeScore + 
                $mediaRunwayConditionScore + $mediaRunwayLengthScore + 
                $mediaTerrainScore + $manQualificationScore + 
                $manCrewCombinationPilotScore + $manCrewCurrencyScore + 
                $manCrewTestScore + $manFlyingHourScore;
        // }

        $hurt = Hurt::create([
            'user_id' => auth('api')->user()->id,
            'submitted_at' => date("Y-m-d H:i:s"),
            'management_planning' => $managementPlanning,
            'management_planning_score' => $managementPlanningScore,
            'management_command_n_control' => $managementCommandNControl,
            'management_command_n_control_score' => $managementCommandNControlScore,
            'management_sortie' => $managementSortie,
            'management_sortie_score' => $managementSortieScore,
            'management_working_hour' => $managementWorkingHour,
            'management_working_hour_score' => $managementWorkingHourScore,
            'management_flying_hour' => $managementFlyingHour,
            'management_flying_hour_score' => $managementFlyingHourScore,
            'management_take_off_weight' => $managementTakeOffWeight,
            'management_take_off_weight_score' => $managementTakeOffWeightScore,
            'machine_aircraft_type' => $machineAircraftType,
            'machine_aircraft_type_score' => $machineAircraftTypeScore,
            'machine_aircraft_status' => $machineAircraftStatus,
            'machine_aircraft_status_score' => $machineAircraftStatusScore,
            'mission' => $mission,
            'mission_score' => $missionScore,
            'media_weather' => $mediaWeather,
            'media_weather_score' => $mediaWeatherScore,
            'media_area_operation' => $mediaAreaOperation,
            'media_area_operation_score' => $mediaAreaOperationScore,
            'media_aerodrome' => $mediaAerodrome,
            'media_aerodrome_score' => $mediaAerodromeScore,
            'media_runway_condition' => $mediaRunwayCondition,
            'media_runway_condition_score' => $mediaRunwayConditionScore,
            'media_runway_length' => $mediaRunwayLength,
            'media_runway_length_score' => $mediaRunwayLengthScore,
            'media_terrain' => $mediaTerrain,
            'media_terrain_score' => $mediaTerrainScore,
            'man_qualification' => $manQualification,
            'man_qualification_score' => $manQualificationScore,
            'man_crew_combination' => $manCrewCombinationPilot,
            'man_crew_combination_score' => $manCrewCombinationPilotScore,
            'man_crew_currency' => $manCrewCurrency,
            'man_crew_currency_score' => $manCrewCurrencyScore,
            'man_crew_test' => $manCrewTest,
            'man_crew_test_score' => $manCrewTestScore,
            'man_flying_hour' => $manFlyingHour,
            'man_flying_hour_score' => $manFlyingHourScore,
            'total_score' => $total
        ]);

        return $this->successResponse($hurt, "success");
    }

    public function downloadPdf(Hurt $hurt)
    {
        $name = auth()->user()->name;
        $pdf = PDF::loadview('pdf.hurt',compact('hurt', 'name'))->setPaper('a4', 'landscape');
    	return $pdf->download('laporan-hurt.pdf');
    }
}
