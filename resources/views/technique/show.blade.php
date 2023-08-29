@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
    <div class="col">
        <img src="{{ $viewData['technique']['image'] }}" width="200px" height="200">
    </div>
    <div class="col">
        <div class="row">
            <p>{{ $viewData['technique']['model'] }}</p>
        </div>
        <div class="row">
            <p>{{ $viewData['technique']['description'] }}</p>
        </div>
        <div class="row">
            <p> $ {{ $viewData['technique']['price'] }}</p>
        </div>
    </div>
    <a href="{{ route('technique.delete', ['id'=> $viewData['technique']['id']]) }}" class="btn btn-danger">Delete</a>
    </div>
</div>

@endsection