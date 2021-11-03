<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bold Face</title>
    <style>
        .text-center{
            text-align: center;
        }
        .text-right{
            text-align: right;
        }
        h4{
            margin: 0;
        }

        .watermark {
            position: absolute;
            top: 50%;
            left: 15%;
            fill-opacity: 0.15;
            opacity: 0.15;
            width: 700px;
            -webkit-transform: rotate(-10deg);
            -moz-transform: rotate(-10deg);
            -o-transform: rotate(-10deg);
            -ms-transform: rotate(-10deg);
            transform: rotate(-10deg);
        }

        .span-watermark {
            position: absolute;
            top: 60%;
            left: 40%;
            color: #0070b3;
            font-size: 31px;
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
    <span class="span-watermark">{{ $boldface->created_at->format('d F Y \P\u\k\u\l H:i') }} WIB</span>
    <div class="row">
        <div class="text-center" style="width: 40%;display: inline-block;">
            <h3>WING 2 LANUD ABD SALEH <br>SKADRON UDARA 4</h3>
            <hr>
        </div>
        <div style="width: 30%;display: inline-block;"></div>
        <div style="width: 23%;display: inline-block;">
            <h4>Nama : {{auth()->user()->name}}</h4>
            <h4>Tanggal : {{$boldface->created_at->format('d-m-Y H:i')}}</h4>
            <h4>Nilai : 100</h4>
        </div>
    </div>
    <h3 class="text-center">BOLD FACE PROCEDURE C-212 CASA SERI 200</h3>
    <table style="width: 100%;">
        <tr>
            <td style="width: 20%" class="text-right"><b>I.</b></td>
            <td colspan="2"><b>ELECTRICAL FIRE ON THE GROUND</b></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">1. MASTER SWICTH</td>
            <td>OFF</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">2. APU</td>
            <td>OFF & DISCONECTED</td>
        </tr>
        <tr>
            <td style="width: 20%" class="text-right"><b>II.</b></td>
            <td colspan="2"><b>ENGINE FIRE ON GROUND</b></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">1. FUEL SWITCH</td>
            <td>CLOSED</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">2. EMERGENCY SHUT DOWN LEVER</td>
            <td>FEATHER</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">3. FUEL BOOSTER PUMP</td>
            <td>OFF</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">4. FIRE DISCHARGE BUTTON</td>
            <td>PRESS AS REQ</td>
        </tr>
        <tr>
            <td style="width: 20%" class="text-right"><b>III.</b></td>
            <td colspan="2"><b>ENGINE FAILLURE DURING TAKE OFF (ABORT)</b></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">1. POWER LEVERS</td>
            <td>AFT OF FI</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">2. CONTROL COLUMN</td>
            <td>FULL FORWARD</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">3. POWER LEVERS</td>
            <td>GI</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">4. BRAKES</td>
            <td>APPLY AS REQ</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">5. POWER LEVER</td>
            <td>REVERSE AS REQ</td>
        </tr>
        <tr>
            <td style="width: 20%" class="text-right"><b>IV.</b></td>
            <td colspan="2"><b>ENGINE FAILLURE DURING TAKE OFF (CONTINUED)</b></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">1. RPM LEVERS</td>
            <td>T/O OR LAND.</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">2. POWER LEVERS</td>
            <td>MAX EGT 650˚C</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">3. APR LIGHT</td>
            <td>CX LIGHT ON</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">4. IN OPERATIVE ENGINE</td>
            <td>IDENTIFY</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">5. EMERGENCY SHUT DOWN LEVER(FAILED)</td>
            <td>FEATHER</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">6. AIR SPEED</td>
            <td>MAINT 94-96 KIAS</td>
        </tr>
        <tr>
            <td style="width: 20%" class="text-right"><b>V.</b></td>
            <td colspan="2"><b>ENGINE FIRE IN FLIGHT (ON FAILLED ENGINE)</b></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">1. EMERGENCY SHUT DOWN LEVER</td>
            <td>FEATHER</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">2. FUEL BOOSTER PUMP</td>
            <td>OFF</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">3. FIRE DISCHARGE BUTTON</td>
            <td>PRESS AS REQ</td>
        </tr>
        <tr>
            <td style="width: 20%" class="text-right"><b>V.</b></td>
            <td colspan="2"><b>ENGINE FAILLURE IN FLIGHT (ON FAILLED ENGINE)</b></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">1. EMERGENCY SHUT DOWN LEVER</td>
            <td>FEATHER</td>
        </tr>
        <tr>
            <td style="width: 20%" class="text-right"><b>VI.</b></td>
            <td colspan="2"><b>LIMITATION</b></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">1. MAX TEMP START ENGINE <br>&emsp;&emsp;&emsp;IN 1 SECOND</td>
            <td><br>770 ºC</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">2. MAX POWER TAKE OFF &emsp;&emsp;&emsp;EGT <br>&emsp;&emsp;&emsp;IN 5 MINUTE&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;TQ</td>
            <td>650 ºC <br>100 %</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">
                3. RPM SETTING 
                <br>&emsp;&emsp;&emsp;TAKE OFF AND MAX CONT 
                <br>&emsp;&emsp;&emsp;MAX CRUISE
                <br>&emsp;&emsp;&emsp;MIN IN FLIGHT CRUISE
                <br>&emsp;&emsp;&emsp;MIN REVERSE LANDING
            </td>
            <td>
                <br>100  %
                <br>98  %
                <br>96  %
                <br>93  %
            </td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">
                4. AIR SPEED LIMITS 
                <br>&emsp;&emsp;&emsp;MAX OPS SPEED LIMIT ( Vmo ) 
                <br>&emsp;&emsp;&emsp;MAX MANUVER LIMIT	( VA )
                <br>&emsp;&emsp;&emsp;MIN CONTROL SPEED	 (Vmoa)
                <br>&emsp;&emsp;&emsp;MAX REVERSE THRUST SPEED
            </td>
            <td>
                <br>200 KIAS
                <br>146 KIAS
                <br>85 KIAS
                <br>90 KIAS
            </td>
        </tr>
    </table>
</body>
</html>