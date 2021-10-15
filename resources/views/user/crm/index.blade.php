@extends('layout.backend.app',[
	'title' => 'Crm',
	'pageTitle' => 'Crm',
])
@section('content')
<div class="jumbotron">
  <h1 class="display-4">Hello, {{ Auth::user()->name }}</h1>
  <p class="lead">Selamat datang di halaman CRM.</p>
  <hr class="my-4">
  <p>Anda login sebagai {{ Auth::user()->role }}.</p>
</div>
@endsection