@extends('layouts.app')
@section('content')
<div class="container" id="container-home">
  <div class="col">
    <div class="row-sm">
        <a type="button" class="btn btn-primary" href="{{ route('technique.create') }}">Create Technique</a>
    </div>
    <br>
    <div class="row-sm">
        <a type="button" class="btn btn-primary" href="{{ route('technique.index') }}">List Techniques</a>
    </div>
  </div>
</div>
@endsection