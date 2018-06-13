<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\Songs;
use App\User;
use Auth;
use Carbon\Carbon;


class SongsController extends Controller{

	public function showLyrics($id){
        $findLyrics = Songs::find($id); 
        $data['lyrics'][]= array(
            'title' => $findLyrics->title,
            'artist' => $findLyrics->artist,
            'lyrics' => $findLyrics->lyrics,
            'user'  =>  User::with('songs')->find($findLyrics->user_id)->name,
            'date' => $findLyrics->created_at,
        );
        return view('partials.lyric_page',$data);
    }

	public function processSongs(Request $request){
 
        $requiredFields = array( 
                'songTitle' => 'required',
                'songArtist' => 'required',
                'songLyrics' => 'required',
             ); 
       $validateRegister = Validator::make(
            $request->all(),
            $requiredFields
        );  	

        $fields =[
                    'title'     =>  request('songTitle'),
                    'artist'    =>  request('songArtist'),
                    'lyrics'    =>  request('songLyrics'),
                    'user_id'   =>  Auth::user()->id
                ];
         
        if (!$validateRegister->fails()){

            if ($request->has('id') & ($request->get('id') > 0) ) {         
                Songs::find($request->get('id'))->update($fields);
            } else{ Songs::create($fields); }
            return back();
        }else {            
            return redirect()->back()
            ->withErrors($validateRegister)
            ->withInput();
        }           	
	}
    public function destroy($id)
    {
        Songs::find($id)->delete(); 
        //Payment::where('employee_id', $id)->delete();
        return 'Successfully Deleted';
    }       
}