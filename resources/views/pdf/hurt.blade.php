<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HURT</title>
    <style>
        table {
            width: 90%;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th {
            background-color: black;
            color: white;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .center {
            text-align: center;
        }

        h4 {
            margin: 0px;
        }
        .watermark {
            position: absolute;
            top: 37%;
            left: 13%;
            width: 950px;
            fill-opacity: 0.15;
            opacity: 0.15;
            -webkit-transform: rotate(-10deg);
            -moz-transform: rotate(-10deg);
            -o-transform: rotate(-10deg);
            -ms-transform: rotate(-10deg);
            transform: rotate(-10deg);
        }

        .span-watermark {
            position: absolute;
            top: 55%;
            left: 35%;
            width: 950px;
            color: #0070b3;
            font-size: 35px;
            font-weight: bold;
            opacity: 0.15;
            fill-opacity: 0.15;
            -webkit-transform: rotate(-10deg);
            -moz-transform: rotate(-10deg);
            -o-transform: rotate(-10deg);
            -ms-transform: rotate(-10deg);
            transform: rotate(-10deg);
        }
    </style>
</head>

<body>
    <img src="{{public_path('watermark_no_opacity.png')}}" class="watermark">
    <span class="span-watermark">{{ $hurt->submitted_at->format('d F Y \P\u\k\u\l H:i') }} WIB</span>
    <div style="width: 50%; display: inline-block; float: left;">
        <h4>Nama : {{ $name }}</h4>
        <h4>Tanggal : {{ $hurt->submitted_at->format('d/m/Y H:i') }}</h4>
        <table>
            <thead>
                <tr>
                    <th>PARAMETER</th>
                    <th>KETERANGAN</th>
                    <th style="padding-left: 15px; padding-right: 15px">NILAI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><b>MANAJEMEN</b></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>PERENCANAAN</td>
                    <td>{{ $hurt->management_planning }}</td>
                    <td class="center">{{ $hurt->management_planning_score }}</td>
                </tr>
                <tr>
                    <td>COMMAND & CONTROL</td>
                    <td>{{ $hurt->management_command_n_control }}</td>
                    <td class="center">{{ $hurt->management_command_n_control_score }}</td>
                </tr>
                <tr>
                    <td>SORTIE</td>
                    <td>{{ $hurt->management_sortie }}</td>
                    <td class="center">{{ $hurt->management_sortie_score }}</td>
                </tr>
                <tr>
                    <td>WORKING HOUR</td>
                    <td>{{ $hurt->management_working_hour }}</td>
                    <td class="center">{{ $hurt->management_working_hour_score }}</td>
                </tr>
                <tr>
                    <td>FLYING HOUR</td>
                    <td>{{ $hurt->management_flying_hour }}</td>
                    <td class="center">{{ $hurt->management_flying_hour_score }}</td>
                </tr>
                <tr>
                    <td>JENIS PESAWAT</td>
                    <td>{{ $hurt->management_take_off_weight }}</td>
                    <td class="center">{{ $hurt->management_take_off_weight_score }}</td>
                </tr>
                <tr>
                    <td><b>MISSION</b></td>
                    <td>{{ $hurt->mission }}</td>
                    <td class="center">{{ $hurt->mission_score }}</td>
                </tr>
                <tr>
                    <td><b>MAN</b></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>KUALIFIKASI</td>
                    <td>{{ $hurt->man_qualification }}</td>
                    <td class="center">{{ $hurt->man_qualification_score }}</td>
                </tr>
                <tr>
                    <td>CREW COMBINATION</td>
                    <td>{{ $hurt->man_crew_combination }}</td>
                    <td class="center">{{ $hurt->man_crew_combination_score }}</td>
                </tr>
                <tr>
                    <td>CREW CURRENCY</td>
                    <td>{{ $hurt->man_crew_currency }}</td>
                    <td class="center">{{ $hurt->man_crew_currency_score }}</td>
                </tr>
                <tr>
                    <td>CREW REST</td>
                    <td>{{ $hurt->man_crew_test }}</td>
                    <td class="center">{{ $hurt->man_crew_test_score }}</td>
                </tr>
                <tr>
                    <td>CUMULATIVE FLYING HOURS</td>
                    <td>{{ $hurt->man_flying_hour }}</td>
                    <td class="center">{{ $hurt->man_flying_hour_score }}</td>
                </tr>
                <tr>
                    <td><b>MACHINE</b></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>JENIS PESAWAT</td>
                    <td>{{ $hurt->machine_aircraft_type }}</td>
                    <td class="center">{{ $hurt->machine_aircraft_type_score }}</td>
                </tr>
                <tr>
                    <td>KONDISI PESAWAT</td>
                    <td>{{ $hurt->machine_aircraft_status }}</td>
                    <td class="center">{{ $hurt->machine_aircraft_status_score }}</td>
                </tr>
                <tr>
                    <td><b>MEDIA</b></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>WEATHER</td>
                    <td>{{ $hurt->media_weather }}</td>
                    <td class="center">{{ $hurt->media_weather_score }}</td>
                </tr>
                <tr>
                    <td>AREA OPERATION</td>
                    <td>{{ $hurt->media_area_operation }}</td>
                    <td class="center">{{ $hurt->media_area_operation_score }}</td>
                </tr>
                <tr>
                    <td>FAM AERODROME</td>
                    <td>{{ $hurt->media_aerodrome }}</td>
                    <td class="center">{{ $hurt->media_aerodrome_score }}</td>
                </tr>
                <tr>
                    <td>KONDISI RUNWAY</td>
                    <td>{{ $hurt->media_runway_condition }}</td>
                    <td class="center">{{ $hurt->media_runway_condition_score }}</td>
                </tr>
                <tr>
                    <td>PANJANG RUNWAY</td>
                    <td>{{ $hurt->media_runway_length }}</td>
                    <td class="center">{{ $hurt->media_runway_length_score }}</td>
                </tr>
                <tr>
                    <td>TERRAIN/OBSTACLE</td>
                    <td>{{ $hurt->media_terrain }}</td>
                    <td class="center">{{ $hurt->media_terrain_score }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="center"><b>TOTAL</b></td>
                    <td class="center">{{ $hurt->total_score }}</td>
                </tr>
            </tbody>
        </table>
        <br>
        <h4 class="center" style="width: 90%">KESIMPULAN</h4>
        @if ($hurt->total_score > 0 && $hurt->total_score < 35)
            <table>
                <thead>
                    <tr>
                        <th style="background-color: green; color: black">RESIKO RENDAH</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="center">
                            Tingkat resiko dalam batas normal.
                            <br><br>
                            Lanjutkan penerbangan dengan tetap melaksanakan
                            <br><br>
                            upaya pengurangan tingkat resiko
                        </td>
                    </tr>
                </tbody>
            </table>
        @endif
        @if ($hurt->total_score >= 36 && $hurt->total_score <= 50)
            <table>
                <thead>
                    <tr>
                        <th style="background-color: yellow; color: black">RESIKO MENENGAH</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="center">
                            Tingkat resiko diatas batas normal.
                            <br><br>
                            Kordinasikan dengan Kasiops untuk mengurangi tingkat resiko dengan upaya yang sesuai
                            <br><br>
                            Misi dapat dilanjutkan ataupun dapat dibatalkan
                            <br><br>
                            sampai tercapai kondisi tingkat resiko yang lebih baik
                        </td>
                    </tr>
                </tbody>
            </table>
        @endif
        @if ($hurt->total_score > 50 || $hurt->total_score == 0)
            <table>
                <thead>
                    <tr>
                        <th style="background-color: red; color: black">RESIKO TINGGI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="center">
                            Hentikan misi penerbangan!!!
                            <br><br>
                            Lapor DANSKD 4 dan Kasiops Skd 4
                            <br><br>
                            Kurangi tingkat resiko dengan langkah-langkah segera
                        </td>
                    </tr>
                </tbody>
            </table>
        @endif
    </div>
    <div style="width: 50%; display: inline-block; float: right;">
        <h4 class="center" style="width: 90%">Penjelasan Warna</h4>
        <table>
            <thead>
                <tr>
                    <th style="background-color: green; color: black">RESIKO RENDAH</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="center">
                        Tingkat resiko dalam batas normal.
                        <br><br>
                        Lanjutkan penerbangan dengan tetap melaksanakan
                        <br><br>
                        upaya pengurangan tingkat resiko
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <table>
            <thead>
                <tr>
                    <th style="background-color: yellow; color: black">RESIKO MENENGAH</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="center">
                        Tingkat resiko diatas batas normal.
                        <br><br>
                        Kordinasikan dengan Kasiops untuk mengurangi tingkat resiko dengan upaya yang sesuai
                        <br><br>
                        Misi dapat dilanjutkan ataupun dapat dibatalkan
                        <br><br>
                        sampai tercapai kondisi tingkat resiko yang lebih baik
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <table>
            <thead>
                <tr>
                    <th style="background-color: red; color: black">RESIKO TINGGI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="center">
                        Hentikan misi penerbangan!!!
                        <br><br>
                        Lapor DANSKD 4 dan Kasiops Skd 4
                        <br><br>
                        Kurangi tingkat resiko dengan langkah-langkah segera
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <table style="border-color: white">
            <tr style="border-color: white">
                <td style="border-color: white">
                    <table>
                        <thead>
                            <tr>
                                <th colspan="2" style="background-color: grey;color: black">KUALIFIKASI PENERBANGAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="center" style="width: 50%">A</td>
                                <td>IP/CX PILOT</td>
                            </tr>
                            <tr>
                                <td class="center" style="width: 50%">B</td>
                                <td>CAPT PILOT</td>
                            </tr>
                            <tr>
                                <td class="center" style="width: 50%">C</td>
                                <td>CAPT BR</td>
                            </tr>
                            <tr>
                                <td class="center" style="width: 50%">D</td>
                                <td>COPIL L/H</td>
                            </tr>
                            <tr>
                                <td class="center" style="width: 50%">E</td>
                                <td>COPIL R/H</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td style="border-color: white">
                    <table>
                        <thead>
                            <tr>
                                <th style="background-color: grey;color: black">NILAI ANGKA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1 = AMAN</td>
                            </tr>
                            <tr>
                                <td>2 = SDKT BERESIKO</td>
                            </tr>
                            <tr>
                                <td>3 = CUKUP BERESIKO</td>
                            </tr>
                            <tr>
                                <td>4 = BERESIKO</td>
                            </tr>
                            <tr>
                                <td>5 = SGT BERESIKO</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
