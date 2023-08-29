@extends('layouts.app')
@section('messages')
@if($message == "satisfactory-creation")
<div class="alert alert-dismissible alert-success">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <p>Technique created successfully</p>
</div>
@elseif($message == "failed-creation") 
<div class="alert alert-dismissible alert-danger">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Oh snap!</strong> try submitting again.
</div>
@endif
@endsection

@section('content')
<div class="container">
    <form action="{{ route('technique.save') }}" method="POST">
        @csrf
        <div class="col">
        <br>
        <div class="row">
            <h3>Create technique</h3>
          </div>
          <div class="row">
            <label for="form-model-input" class="col-sm-2 col-form-label">Model</label>
            <input type="text" name="model" id="form-model-input" placeholder="Nombre del modelo">
          </div>
          <br>
          <div class="row">
            <label for="form-image-input" class="col-sm-2 col-form-label">Image</label>
            <input type="text" name="image" id="form-image-input" placeholder="Procure puner la url de la imagen">
          </div>
          <br>
          <div class="row">
            <label for="form-description-input" class="col-sm-2 col-form-label">Description</label>
            <input type="text" name="description" id="form-description-input" placeholder="descripción">
          </div>
          <br>
          <div class="row">
            <label for="form-price-input" class="col-sm-2 col-form-label">Price</label>
            <input type="text" name="price" id="form-price-input" pattern="[0-9]+" placeholder="120000">
          </div>
        </div>
        <button type="submit" class="btn btn-primary" style="margin: 5px">Crear</button>
    </form>
</div>

@endsection