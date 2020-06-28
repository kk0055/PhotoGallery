@extends('layouts.app')

@section('content')
<section class="jumbotron text-center">
  <div class="container">
    <h1>{{$album->name}} </h1>
    <p class="lead text-muted">{{$album->description}} </p>
    <p>
      <a href="{{route('photo-create',$album->id)}}" class="btn btn-primary my-2">Upload Photo</a>
      <a href="/" class="btn btn-secondary my-2">Go Back</a>
    </p>
  </div>
</section>

<div class="container">
@if(count($album->photos) > 0 )
@foreach ($album->photos as $photo)
<div class="card mb-4 shadow-sm">
<img src=/storage/albums/{{$album->id}}/{{$photo->photo}}  " alt="{{$photo->photo}}" height="200px" width="300px">
  <div class="card-body">
    <p class="card-text">{{$photo->description}}</p>
    <div class="d-flex justify-content-between align-items-center">
      <div class="btn-group">
      <a href="{{route('photo-show', $photo->id)}}" button type="button" class="btn btn-sm btn-outline-secondary">View</a>
      
      </div>
      <small class="text-muted">{{$photo->size}}</small>
    </div>
  </div>
</div>
@endforeach
@else
<h3>No photos yet</h3>

@endif
</div>
@endsection