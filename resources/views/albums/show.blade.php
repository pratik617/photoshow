@extends('layouts.app')

@section('content')
  <h1>{{ $album->name }}</h1>
  <a href="{{ route('albums.index') }}" class="button secondary">Go Back</a>
  <a href="{{ route('photos.create', $album->id) }}" class="button">Upload Photo To Album</a>
  <hr>
@endsection
