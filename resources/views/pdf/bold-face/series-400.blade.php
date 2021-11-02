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
            top: 3%;
            left: 35%;
            fill-opacity: 0.7;
            opacity: 0.7;;
            width: 500px;
        }

        .span-watermark {
            position: absolute;
            top: 12%;
            left: 51%;
            width: 500px;
            color: #0070b3;
            font-size: 25px;
            font-weight: bold;
            opacity: 0.7;
            fill-opacity: 0.7;
            /* z-index: -1; */
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
    <h3 class="text-center">BOLD FACE PROCEDURE NC-212i SERI 400</h3>
    <table style="width: 100%;">
        <tr>
            <td style="width: 20%" class="text-right"><b>I.</b></td>
            <td colspan="2"><b>ABORTED START</b></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">1. FUEL VALVE</td>
            <td>OFF</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">2. FUEL BOOSTER PUMP</td>
            <td>OFF</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">3. HOLD TO CRANK</td>
            <td>STBY</td>
        </tr>
        <tr>
            <td style="width: 20%" class="text-right"><b>II.</b></td>
            <td colspan="2"><b>ENGINE FIRE ON GROUND</b></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">1. EMERGENCY SHUT DOWN LEVER</td>
            <td>FEATHER</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">2. FUEL VALVE</td>
            <td>OFF</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">3. GENERATOR SWITCH</td>
            <td>OFF</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">4. FIRE DISCHARGE BUTTON</td>
            <td>PUSHED</td>
        </tr>
        <tr>
            <td style="width: 20%" class="text-right"><b>III.</b></td>
            <td colspan="2"><b>ENGINE FAILURE DURING TAKE OFF (ABORT)</b></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">1. POWER LEVERS</td>
            <td>G.I.</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">2. CONTROL COLUMN</td>
            <td>FORWARD</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">3. BRAKES</td>
            <td>APPLY AS REQ</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">4. POWER LEVER (UNAFFECTED E/G)</td>
            <td>REVERSE AS REQ</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">5. CORRESPONDING EMERGENCY PROCEDURE</td>
            <td>APPLIED</td>
        </tr>
        <tr>
            <td style="width: 20%" class="text-right"><b>IV.</b></td>
            <td colspan="2"><b>ENGINE FAILURE DURING TAKE OFF (CONTINUED)</b></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">1. EMERGENCY SHUT DOWN LEVER (AFFECTED E/G)</td>
            <td>FEATHER</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">2. APR ANNUNCIATION (AFFECTED E/G)</td>
            <td>CHECKED ON</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">3. AT VR ANNOUNCEMENT</td>
            <td>ROTATED</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">4. V2</td>
            <td>ACHIEVED & MAINTAINED</td>
        </tr>
        <tr>
            <td style="width: 20%" class="text-right"><b>V.</b></td>
            <td colspan="2"><b>ENGINE FIRE IN FLIGHT</b></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">1. EMERGENCY SHUT DOWN LEVER (AFFECTED E/G)</td>
            <td>FEATHER</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">2. FUEL BOOSTER PUMPS (AFFECTED E/G)</td>
            <td>OFF</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">3. FIRE DISCHARGE BUTTON</td>
            <td>PUSHED</td>
        </tr>
        <tr>
            <td style="width: 20%" class="text-right"><b>VI.</b></td>
            <td colspan="2"><b>BOTH ENGINES FAILURE</b></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">1. EMERGENCY SHUT DOWN LEVER</td>
            <td>FEATHER</td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">2. FLAPS LEVER</td>
            <td>UP</td>
        </tr>
        <tr>
            <td style="width: 20%" class="text-right"><b>VII.</b></td>
            <td colspan="2"><b>LIMITATION</b></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">
                1. MAX TEMPERATURE (EGT) 
                <br>&emsp;&emsp;&emsp;STARTING IN 1 SECOND
                <br>&emsp;&emsp;&emsp;TAXY IN 10 SECOND
                <br>&emsp;&emsp;&emsp;NORMAL T/O (2 ENGINE) IN 5 MIN
                <br>&emsp;&emsp;&emsp;MAX T/O (1 ENGINE) IN 5  MIN
                <br>&emsp;&emsp;&emsp;TRANSIENT (APR INACTIVE) IN 20 SECOND
            </td>
            <td>
                <br>776° C
                <br>750° C
                <br>650° C
                <br>650° C
                <br>685° C
            </td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">
                2. MAX POWER (TQ)
                <br>&emsp;&emsp;&emsp;NORMAL T/O (2 ENGINE) IN 5 MIN
                <br>&emsp;&emsp;&emsp;MAX T/O (1 ENGINE) IN 5  MIN
                <br>&emsp;&emsp;&emsp;TRANSIENT (APR INACTIVE) IN 20 SECOND
            </td>
            <td>
                <br>100 %
                <br>100 %
                <br>112 %
            </td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 50%">
                3. RPM SETTING 
                <br>&emsp;&emsp;&emsp;NORMAL T/O (2 ENGINE) IN 5 MIN 
                <br>&emsp;&emsp;&emsp;MAX T/O (1 ENGINE) IN 5  MIN
                <br>&emsp;&emsp;&emsp;TRANSIENT (APR INACTIVE) IN 20 SECOND
                <br>&emsp;&emsp;&emsp;REVERSE
            </td>
            <td>
                <br>MAX 101 %
                <br>MAX 101 %
                <br>MAX 105.5 %
                <br>MIN 94.5 %
            </td>
        </tr>
    </table>
</body>
</html>