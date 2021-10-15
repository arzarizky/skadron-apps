@extends('layout.backend.app',[
	'title' => 'Bold Face 400',
	'pageTitle' => 'Bold Face 400',
])
@section('content')
<div class="jumbotron">
  <h1 class="display-4">Hello, {{ Auth::user()->name }}</h1>
  <p class="lead">Selamat datang di halaman Bold Face 400</p>
  <hr class="my-4">
  <p>Anda login sebagai {{ Auth::user()->role }}.</p>
</div>
@endsection