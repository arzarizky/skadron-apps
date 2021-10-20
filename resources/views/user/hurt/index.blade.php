@extends('layout.backend.app',[
	'title' => 'Hurt',
	'pageTitle' => 'Hurt',
])

@push('css')
<link href="{{ asset('template/backend/sb-admin-2') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content')
<div class="jumbotron">
  <h1 class="display-4">Hello, {{ Auth::user()->name }}</h1>
  <p class="lead">Selamat datang di halaman <span><b>HURT</b></span></p>
  <p class="lead">HITUNG RESIKO TERBANG-LAMBANGJA</p>
  <p class="lead">SKADRON UDARA 4</p>
  <hr class="my-4">
  <p>Anda login sebagai {{ Auth::user()->role }}</p>
  <p>Selamat bekerja dan sehat selalu :)</p>
</div>

<div class="notify">
    <div class="card mb-4">
        <div class="border-bottom-danger">
            <!-- Button trigger modal -->
            <div class="ml-4 mt-2 mb-4 mt-4 text-center">
                <h3> 1. MANAGEMENT </h3>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered data-table" id="">
                    <div class="ml-4 mt-2 mb-4 mt-4">
                        <h4><B> a. PLANNING </B></h4>
                    </div>
                    <thead>
                        <tr>
                            <th style="vertical-align: middle; text-align: center">MISI DITERIMA</th>
                            <th style="vertical-align: middle; text-align: center ">RESIKO</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td style="vertical-align: middle; text-align: center">SSI RENBANG</td>
                            <td style="vertical-align: middle; text-align: center">1</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="vertical-align: middle; font-size:25px; background-color: lightblue; color: red"><b>NILAI 100</b></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered data-table" id="">
                    <div class="ml-4 mt-2 mb-4 mt-4">
                        <h4><B> b. SUPERVISON(AUTHORIZED OFFICER) </B></h4>
                    </div>
                    <thead>
                        <tr>
                            <th rowspan="2" style="vertical-align: middle; text-align: center">COMMAND AND CONTROL</th>
                            <th colspan="2" style="vertical-align: middle; text-align: center ">LATIHAN</th>
                            <th colspan="2" style="vertical-align: middle; text-align: center ">OPERASI</th>
                        </tr>
                        <tr>
                            <th style="vertical-align: middle; text-align: center ">DAY</th>
                            <th style="vertical-align: middle; text-align: center ">NIGHT</th>
                            <th style="vertical-align: middle; text-align: center ">DAY</th>
                            <th style="vertical-align: middle; text-align: center ">NIGHT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="vertical-align: middle; text-align: center">DAN SKADRON 4</td>
                            <td style="vertical-align: middle; text-align: center">1</td>
                            <td style="vertical-align: middle; text-align: center">1</td>
                            <td style="vertical-align: middle; text-align: center">1</td>
                            <td style="vertical-align: middle; text-align: center">2</td>
                        </tr>
                        <tr>
                            <td colspan="5" style="vertical-align: middle; font-size:25px; background-color: lightblue; color: red"><b>NILAI 100</b></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered data-table" id="">
                    <div class="ml-4 mt-2 mb-4 mt-4">
                        <h4><B> c. DAILY SORTIES NUMBER </B></h4>
                    </div>
                    <thead>
                        <tr>
                            <th style="vertical-align: middle; text-align: center">TERBANG KE BERAPA</th>
                            <th style="vertical-align: middle; text-align: center ">RESIKO</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td style="vertical-align: middle; text-align: center">TRAINING 1-2</td>
                            <td style="vertical-align: middle; text-align: center">1</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="vertical-align: middle; font-size:25px; background-color: lightblue; color: red"><b>NILAI 100</b></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered data-table" id="">
                    <div class="ml-4 mt-2 mb-4 mt-4">
                        <h4><B> d. DAILY WORKING HOURS </B></h4>
                    </div>
                    <thead>
                        <tr>
                            <th style="vertical-align: middle; text-align: center">JAM</th>
                            <th style="vertical-align: middle; text-align: center ">RESIKO</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td style="vertical-align: middle; text-align: center">1-6 HOURS</td>
                            <td style="vertical-align: middle; text-align: center">1</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="vertical-align: middle; font-size:25px; background-color: lightblue; color: red"><b>NILAI 100</b></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered data-table" id="">
                    <div class="ml-4 mt-2 mb-4 mt-4">
                        <h4><B> e. DAILY FLAYING HOURS </B></h4>
                    </div>
                    <thead>
                        <tr>
                            <th style="vertical-align: middle; text-align: center">JAM</th>
                            <th style="vertical-align: middle; text-align: center ">RESIKO</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td style="vertical-align: middle; text-align: center">1-6 HOURS</td>
                            <td style="vertical-align: middle; text-align: center">1</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="vertical-align: middle; font-size:25px; background-color: lightblue; color: red"><b>NILAI 100</b></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered data-table" id="">
                    <div class="ml-4 mt-2 mb-4 mt-4">
                        <h4><B> f. TAKE OFF WEIGHT </B></h4>
                    </div>
                    <thead>
                        <tr>
                            <th rowspan="2" style="vertical-align: middle; text-align: center">PESAWAT</th>
                            <th colspan="3" style="vertical-align: middle; text-align: center ">RESIKO</th>
                        </tr>
                        <tr>
                            <th style="vertical-align: middle; text-align: center ">1</th>
                            <th style="vertical-align: middle; text-align: center ">2</th>
                            <th style="vertical-align: middle; text-align: center ">3</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td style="vertical-align: middle; text-align: center">C-212 200</td>
                            <td style="vertical-align: middle; text-align: center"> <7.450 Kg </td>
                            <td style="vertical-align: middle; text-align: center"> 7.450 Kg < TOW < 7.550 Kg </td>
                            <td style="vertical-align: middle; text-align: center"> >7.550 Kg </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card mb-4 mt-4">
        <div class="border-bottom-danger">
            <!-- Button trigger modal -->
            <div class="ml-4 mt-2 mb-4 mt-4 text-center">
                <h3> 2. MACHINE </h3>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered data-table" id="">
                    <div class="ml-4 mt-2 mb-4 mt-4">
                        <h4><B> a. TYPE OF AIRCRAFT </B></h4>
                    </div>
                    <thead>
                        <tr>
                            <th style="vertical-align: middle; text-align: center">A/C TIPE</th>
                            <th style="vertical-align: middle; text-align: center ">TINGKAT RESIKO</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td style="vertical-align: middle; text-align: center">C-212 200</td>
                            <td style="vertical-align: middle; text-align: center">1</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="vertical-align: middle; font-size:25px; background-color: lightblue; color: red"><b>NILAI 100</b></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered data-table" id="">
                    <div class="ml-4 mt-2 mb-4 mt-4">
                        <h4><B> b. AIRCRAFT STATUS </B></h4>
                    </div>
                    <thead>
                        <tr>
                            <th style="vertical-align: middle; text-align: center">KONDISI</th>
                            <th style="vertical-align: middle; text-align: center">RESIKO</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td style="vertical-align: middle; text-align: center">SERVICEABLE PENUH</td>
                            <td style="vertical-align: middle; text-align: center">1</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="vertical-align: middle; font-size:25px; background-color: lightblue; color: red"><b>NILAI 100</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card mb-4 mt-4">
        <div class="border-bottom-danger">
            <!-- Button trigger modal -->
            <div class="ml-4 mt-2 mb-4 mt-4 text-center">
                <h3> 3. MISSION </h3>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered data-table" id="">
                    <thead>
                        <tr>
                            <th rowspan="2" style="vertical-align: middle; text-align: center">MISSION</th>
                            <th colspan="5" style="vertical-align: middle; text-align: center ">KUALIFIKASI PENERBANG</th>
                        </tr>
                        <tr>
                            <th style="vertical-align: middle; text-align: center">A</th>
                            <th style="vertical-align: middle; text-align: center">B</th>
                            <th style="vertical-align: middle; text-align: center">C</th>
                            <th style="vertical-align: middle; text-align: center">D</th>
                            <th style="vertical-align: middle; text-align: center">E</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td style="vertical-align: middle; text-align: center">LOCAL TRN</td>
                            <td style="vertical-align: middle; text-align: center">1</td>
                            <td style="vertical-align: middle; text-align: center">1</td>
                            <td style="vertical-align: middle; text-align: center">1</td>
                            <td style="vertical-align: middle; text-align: center">2</td>
                            <td style="vertical-align: middle; text-align: center">3</td>
                        </tr>
                        <tr>
                            <td colspan="6" style="vertical-align: middle; font-size:25px; background-color: lightblue; color: red"><b>NILAI 100</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card mb-4 mt-4">
        <div class="border-bottom-danger">
            <!-- Button trigger modal -->
            <div class="ml-4 mt-2 mb-4 mt-4 text-center">
                <h3> 4. MEDIA </h3>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered data-table" id="">
                    <div class="ml-4 mt-2 mb-4 mt-4">
                        <h4><B> a. WEATHER </B></h4>
                    </div>
                    <thead>
                        <tr>
                            <th style="vertical-align: middle; text-align: center">KONDISI</th>
                            <th style="vertical-align: middle; text-align: center ">RESIKO</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td style="vertical-align: middle; text-align: center">VMC</td>
                            <td style="vertical-align: middle; text-align: center">1</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="vertical-align: middle; font-size:25px; background-color: lightblue; color: red"><b>NILAI 100</b></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered data-table" id="">
                    <div class="ml-4 mt-2 mb-4 mt-4">
                        <h4><B> b. AREA OF OPERATION (FAMILIARITY) </B></h4>
                    </div>
                    <thead>
                        <tr>
                            <th style="vertical-align: middle; text-align: center"></th>
                            <th style="vertical-align: middle; text-align: center"> < 1 BLN</th>
                            <th style="vertical-align: middle; text-align: center ">1-3</th>
                            <th style="vertical-align: middle; text-align: center "> > 3 BLN</th>
                            <th style="vertical-align: middle; text-align: center ">1ST TIME</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td style="vertical-align: middle; text-align: center">SIANG</td>
                            <td style="vertical-align: middle; text-align: center">1</td>
                            <td style="vertical-align: middle; text-align: center">2</td>
                            <td style="vertical-align: middle; text-align: center">3</td>
                            <td style="vertical-align: middle; text-align: center">3</td>

                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align: center">MALAM</td>
                            <td style="vertical-align: middle; text-align: center">2</td>
                            <td style="vertical-align: middle; text-align: center">3</td>
                            <td style="vertical-align: middle; text-align: center">4</td>
                            <td style="vertical-align: middle; text-align: center">4</td>
                        </tr>
                        <tr>
                            <td colspan="5" style="vertical-align: middle; font-size:25px; background-color: lightblue; color: red"><b>NILAI 100</b></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered data-table" id="">
                    <div class="ml-4 mt-2 mb-4 mt-4">
                        <h4><B> c. AERODROME </B></h4>
                    </div>
                    <thead>
                        <tr>
                            <th style="vertical-align: middle; text-align: center">AREA</th>
                            <th style="vertical-align: middle; text-align: center">1-3 BLN</th>
                            <th style="vertical-align: middle; text-align: center">3-3 BLN</th>
                            <th style="vertical-align: middle; text-align: center "> > 6 BLN</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td style="vertical-align: middle; text-align: center">SPECIFIC</td>
                            <td style="vertical-align: middle; text-align: center">1</td>
                            <td style="vertical-align: middle; text-align: center">2</td>
                            <td style="vertical-align: middle; text-align: center">3</td>
                        </tr>
                        <tr>
                            <td colspan="4" style="vertical-align: middle; font-size:25px; background-color: lightblue; color: red"><b>NILAI 100</b></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered data-table" id="">
                    <div class="ml-4 mt-2 mb-4 mt-4">
                        <h4><B> d. RUNWAY CONDITION </B></h4>
                    </div>
                    <thead>
                        <tr>
                            <th style="vertical-align: middle; text-align: center">KETERANGAN</th>
                            <th style="vertical-align: middle; text-align: center ">RESIKO</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td style="vertical-align: middle; text-align: center">KERING</td>
                            <td style="vertical-align: middle; text-align: center">1</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="vertical-align: middle; font-size:25px; background-color: lightblue; color: red"><b>NILAI 100</b></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered data-table" id="">
                    <div class="ml-4 mt-2 mb-4 mt-4">
                        <h4><B> e. RUNWAY LENGTH </B></h4>
                    </div>
                    <thead>
                        <tr>
                            <th style="vertical-align: middle; text-align: center">KETERANGAN</th>
                            <th style="vertical-align: middle; text-align: center ">RESIKO</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td style="vertical-align: middle; text-align: center"> >1600 M</td>
                            <td style="vertical-align: middle; text-align: center">1</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="vertical-align: middle; font-size:25px; background-color: lightblue; color: red"><b>NILAI 100</b></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered data-table" id="">
                    <div class="ml-4 mt-2 mb-4 mt-4">
                        <h4><B> f. TERRAIN/OBSTACLE </B></h4>
                    </div>
                    <thead>
                        <tr>
                            <th style="vertical-align: middle; text-align: center">KETERANGAN</th>
                            <th style="vertical-align: middle; text-align: center ">RESIKO</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td style="vertical-align: middle; text-align: center"> FLAT/NO TERRAIN</td>
                            <td style="vertical-align: middle; text-align: center">1</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="vertical-align: middle; font-size:25px; background-color: lightblue; color: red"><b>NILAI 100</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card mb-4 mt-4">
        <div class="border-bottom-danger">
            <!-- Button trigger modal -->
            <div class="ml-4 mt-2 mb-4 mt-4 text-center">
                <h3> 5. MAN </h3>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered data-table" id="">
                    <div class="ml-4 mt-2 mb-4 mt-4">
                        <h4><B> a. FIRST PILOT/PIC </B></h4>
                    </div>
                    <thead>
                        <tr>
                            <th rowspan="2" style="vertical-align: middle; text-align: center">PILOT QUALIFICATION</th>
                            <th style="vertical-align: middle; text-align: center ">A</th>
                            <th style="vertical-align: middle; text-align: center ">B</th>
                            <th style="vertical-align: middle; text-align: center ">C</th>
                            <th style="vertical-align: middle; text-align: center ">D</th>
                            <th style="vertical-align: middle; text-align: center ">E</th>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align: center">1</td>
                            <td style="vertical-align: middle; text-align: center">1</td>
                            <td style="vertical-align: middle; text-align: center">2</td>
                            <td style="vertical-align: middle; text-align: center">3</td>
                            <td style="vertical-align: middle; text-align: center">4</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="6" style="vertical-align: middle; font-size:25px; background-color: lightblue; color: red"><b>NILAI 100</b></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered data-table" id="">
                    <div class="ml-4 mt-2 mb-4 mt-4">
                        <h4><B> b. CREW COMBINATION </B></h4>
                    </div>
                    <thead>
                        <tr>
                            <th style="vertical-align: middle; text-align: center"> PILOT</th>
                            <th style="vertical-align: middle; text-align: center ">CO</th>
                            <th style="vertical-align: middle; text-align: center ">JMU</th>
                            <th style="vertical-align: middle; text-align: center ">UM</th>
                            <th style="vertical-align: middle; text-align: center ">RESIKO</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td style="vertical-align: middle; text-align: center">A</td>
                            <td style="vertical-align: middle; text-align: center">CP</td>
                            <td style="vertical-align: middle; text-align: center">IIMU</td>
                            <td style="vertical-align: middle; text-align: center">ILM</td>
                            <td style="vertical-align: middle; text-align: center">1</td>
                        </tr>
                        <tr>
                            <td colspan="5" style="vertical-align: middle; font-size:25px; background-color: lightblue; color: red"><b>NILAI 100</b></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered data-table" id="">
                    <div class="ml-4 mt-2 mb-4 mt-4">
                        <h4><B> c. CREW CURRENCY </B></h4>
                    </div>
                    <thead>
                        <tr>
                            <th colspan="2" style="vertical-align: middle; text-align: center">LAST FLIGHT</th>
                            <th style="vertical-align: middle; text-align: center ">A</th>
                            <th style="vertical-align: middle; text-align: center ">B</th>
                            <th style="vertical-align: middle; text-align: center ">C</th>
                            <th style="vertical-align: middle; text-align: center ">D</th>
                            <th style="vertical-align: middle; text-align: center ">E</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td style="vertical-align: middle; text-align: center">1-7 HARI</td>
                            <td style="vertical-align: middle; text-align: center">< 15 JAM</td>
                            <td style="vertical-align: middle; text-align: center">1</td>
                            <td style="vertical-align: middle; text-align: center">1</td>
                            <td style="vertical-align: middle; text-align: center">1</td>
                            <td style="vertical-align: middle; text-align: center">2</td>
                            <td style="vertical-align: middle; text-align: center">3</td>
                        </tr>
                        <tr>
                            <td colspan="7" style="vertical-align: middle; font-size:25px; background-color: lightblue; color: red"><b>NILAI 100</b></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered data-table" id="">
                    <div class="ml-4 mt-2 mb-4 mt-4">
                        <h4><B> d. CREW REST </B></h4>
                    </div>
                    <thead>
                        <tr>
                            <th rowspan="2" style="vertical-align: middle; text-align: center">KONDISI ISTIRAHAT</th>
                            <th colspan="3" style="vertical-align: middle; text-align: center ">LAMA ISTIRAHAT</th>
                        </tr>
                        <tr>
                            <th style="vertical-align: middle; text-align: center "> > 8 JAM</th>
                            <th style="vertical-align: middle; text-align: center ">5-8 JAM</th>
                            <th style="vertical-align: middle; text-align: center ">< 5JAM</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td style="vertical-align: middle; text-align: center">RUMAH/MESS</td>
                            <td style="vertical-align: middle; text-align: center">1</td>
                            <td style="vertical-align: middle; text-align: center">1</td>
                            <td style="vertical-align: middle; text-align: center">2</td>
                        </tr>
                        <tr>
                            <td colspan="4" style="vertical-align: middle; font-size:25px; background-color: lightblue; color: red"><b>NILAI 100</b></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered data-table" id="">
                    <div class="ml-4 mt-2 mb-4 mt-4">
                        <h4><B> e. CUMULATIVE FLAYING HOURS</B></h4>
                    </div>
                    <thead>
                        <tr>
                            <th style="vertical-align: middle; text-align: center">JAM</th>
                            <th style="vertical-align: middle; text-align: center ">RESIKO</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td style="vertical-align: middle; text-align: center">0-30Hrs</td>
                            <td style="vertical-align: middle; text-align: center">1</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="vertical-align: middle; font-size:25px; background-color: lightblue; color: red"><b>NILAI 100</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="jumbotron mt-4">
    <h1 class="display-4">TOTAL HURT :</h1>
    <hr class="my-3">
    <h2 class="display-4" style="color: red;">100</h2>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered data-table" id="">
                <thead>
                    <tr>
                        <th style="vertical-align: middle; text-align: center">KODE</th>
                        <th style="vertical-align: middle; text-align: center">TOTAL RESIKO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="vertical-align: middle; font-size:25px; background-color: rgb(43, 175, 43);"></td>
                        <td style="vertical-align: middle; text-align: center"> < 35</td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle; font-size:25px; background-color: rgb(255, 255, 89);"></td>
                        <td style="vertical-align: middle; text-align: center">36 - 50</td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle; font-size:25px; background-color: rgb(250, 74, 74);"></td>
                        <td style="vertical-align: middle; text-align: center">> 50/NO GO AVAILABLE</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card-deck mt-4 mb-4">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered data-table" id="">
                    <thead>
                        <tr>
                            <th colspan="2" style="vertical-align: middle; text-align: center">KUALIFIKASI PENERBANGAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="vertical-align: middle; text-align: center">A</td>
                            <td style="vertical-align: middle; text-align: center">IP/CX PILOT</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered data-table" id="">
                    <thead>
                        <tr>
                            <th colspan="2" style="vertical-align: middle; text-align: center">NILAI ANGKA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="vertical-align: middle; text-align: center">1 = AMAN</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@push('js')
<script src="{{ asset('template/backend/sb-admin-2') }}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('template/backend/sb-admin-2') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('template/backend/sb-admin-2') }}/js/demo/datatables-demo.js"></script>
@endpush