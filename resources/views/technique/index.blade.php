@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
  @foreach ($viewData["technique"] as $technique)
    <div class="col-sm">
    <div class="card mb-3">
  <h3 class="card-header">{{ $technique["model"] }}</h3>
  <img src="{{ $technique['image'] }}" width="50%" height="50%">
  <div class="card-body">
    <p class="card-text">{{ $technique["description"] }}</p>
  </div>
  <div class="card-body">
  <a class="btn btn-primary" href="{{ route('technique.show', ['id'=> $technique['id']]) }}">Ver producto</a>
  </div>
  </div>
  </div>
  @endforeach
</div>
</div>
@endsection