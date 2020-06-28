@extends('layouts.app')

@section('content')

<div class="container">
<div class="col-md-4">
  @if(count($albums) > 0 )
  @foreach ($albums as $album)
  <div class="card mb-4 shadow-sm">
 <img src="/storage/album_covers/{{$album->cover_image}} " alt="{{$album->cover_image}}" height="200px">
    <div class="card-body">
      <p class="card-text">{{$album->description}}</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
        <a href="{{route('album-show', $album->id)}}" button type="button" class="btn btn-sm btn-outline-secondary">View</a>
        
        </div>
        <small class="text-muted">{{$album->name}}</small>
      </div>
    </div>
  </div>
 @endforeach
 @else
 <h3>No album yet</h3>

 @endif
</div>

</div>
@endsection