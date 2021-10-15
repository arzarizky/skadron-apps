@extends('layout.backend.app',[
	'title' => 'Home',
	'pageTitle' => 'Home',
])
@section('content')
<div class="jumbotron">
  <h1 class="display-4">Hello, {{ Auth::user()->name }}</h1>
  <p class="lead">Ini adalah halaman Home</p>
  <hr class="my-4">
  <p>Anda login sebagai {{ Auth::user()->role }}.</p>
</div>
@endsection