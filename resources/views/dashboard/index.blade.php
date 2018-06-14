@extends('layouts.index')

@section('content')
         <h4 class="modal-title">Edit Lyrics</h4>
 
        <div class="modal-body">    
		<form method="POST" action="/addSong/{{ isset($song['id'])? $song['id']:null }}" id="addSong">
          {{ csrf_field() }}             
            <input type="hidden" name="id" value="{{ (isset($song['id']))?$song['id']: 0 }}">  
            <div class="form-group">
              <label for="songTitle">Song Title:</label>
              <input type="text" class="form-control" name="songTitle" id="songTitle" placeholder="Title" value="{{ isset($song['title'])? $song['title']:null }}">
            </div>
            <div class="form-group">
              <label for="songArtist">Song Artist:</label>
              <input type="text" class="form-control" name="songArtist" id="songArtist" placeholder="Artitst" value="{{ isset($song['artist'])? $song['artist']:null }}">
            </div>
            <div class="form-group formadd" id="summernote">
              <label for="songLyrics">Lyrics:</label>
              <textarea class="form-control" rows="10" name="songLyrics" >
                {{ isset($song['lyrics'])? $song['lyrics']:null }}
              </textarea>
            </div>    
        </div>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@endsection