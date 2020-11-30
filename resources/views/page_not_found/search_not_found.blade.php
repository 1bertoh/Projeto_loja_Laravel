@extends('layouts.main')
@section('title', 'Page Not Found')
@section('content')

<div>
    <div class="alert alert-warning" role="alert">
      <h4 class="alert-heading">{{$msg}}</h4>
      <p>O produto não se encontra no nosso banco de dados</p>
      <p class="mb-0"></p>
    </div>
</div>

@endsection