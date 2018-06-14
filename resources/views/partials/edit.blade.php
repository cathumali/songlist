@extends('layouts.index')

@section('content')
        <h4 class="modal-title">Edit Lyrics</h4>
 
        <div class="modal-body">    
        @foreach($lyrics as $songLyrics)
		    <form method="POST" action="/addSong/{{ isset($songLyrics['id'])? $songLyrics['id']:null }}" id="addSong">
          {{ csrf_field() }}             
            <input type="hidden" name="id" value="{{ (isset($songLyrics['id']))?$songLyrics['id']: 0 }}">  
            <div class="form-group">
              <label for="songTitle">Song Title:</label>
              <input type="text" class="form-control" name="songTitle" id="songTitle" placeholder="Title" value="{{ isset($songLyrics['title'])? $songLyrics['title']:null }}">
            </div>
            <div class="form-group">
              <label for="songArtist">Song Artist:</label>
              <input type="text" class="form-control" name="songArtist" id="songArtist" placeholder="Artitst" value="{{ isset($songLyrics['artist'])? $songLyrics['artist']:null }}">
            </div>
            <div class="form-group formadd" >
              <label for="songLyrics">Lyrics:</label>
              <textarea class="form-control" rows="10" name="songLyrics" id="summernote">
                {{ isset($songLyrics['lyrics'])? $songLyrics['lyrics']:null }}
              </textarea>
            </div>   
          @endforeach 
        </div>
           <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@endsection
  <!-- id="summary-ckeditor" -->
<!-- 
<script src="{{ asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' ); 
</script> -->