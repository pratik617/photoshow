@extends('layouts.app')

@section('content')
  <h3>Albums</h3>
  @if(count($albums) > 0)
    <?php
      $colcount = count($albums);
      $i = 1;
     ?>

     <div id="albums">
       <div class="text-center grid-x grid-margin-x">
         @foreach($albums as $album)
          @if($i == $colcount)
            <div class="cell medium-4 end">
              <a href="/albums/{{$album->id}}">
                <img src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}" class="thumbnail">
              </a>
              <br>
              <h4>{{$album->name}}</h4>
          @else
            <div class="cell medium-4">
              <a href="/albums/{{$album->id}}">
                <img src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}" class="thumbnail">
              </a>
              <br>
              <h4>{{$album->name}}-{{$i}} text</h4>
          @endif

          @if($i % 3 == 0)
            </div></div><div class="text-center grid-x grid-margin-x">
          @else
            </div>
          @endif
          <?php $i++ ?>

         @endforeach
       </div>
     </div>
  @else
    <p>No Albums To Display</p>
  @endif
@endsection
