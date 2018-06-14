<!-- Modal -->
  <div class="modal fade" id="addSong" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
        <form method="POST" action="/addSong" id="addSong">
          {{ csrf_field() }}     
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Song</h4>
        </div>
        <div class="modal-body">       
            <input type="hidden" name="id" >  
            <div class="form-group">
              <label for="songTitle">Song Title:</label>
              <input type="text" class="form-control" name="songTitle" id="songTitle" placeholder="Title">
            </div>
            <div class="form-group">
              <label for="songArtist">Song Artist:</label>
              <input type="text" class="form-control" name="songArtist" id="songArtist" placeholder="Artitst">
            </div>
            <div class="form-group formadd" id="summernote">
              <label for="songLyrics">Lyrics:</label>
              <textarea class="form-control" rows="10" name="songLyrics" >
              </textarea>
            </div>    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
