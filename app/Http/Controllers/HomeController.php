<?php

namespace App\Http\Controllers;

use Request; 
use Auth;
use Illuminate\Support\Facades\Input;
use App\Songs;
use Response;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $findSongs = Songs::where('status', 1);
        if (Input::has('search')){
            $findSongs = $findSongs->where('title', 'LIKE', '%'.Input::get('search').'%')
            ->orWhere('id', 'LIKE', '%'.Input::get('search').'%')->orWhere('artist', 'LIKE', '%'.Input::get('search').'%');   
        } 

        $findSongs = $findSongs->orderBy('id', 'DESC')->paginate(10);

          foreach ($findSongs as $song) {
            $data['song_id'][$song->id] = $song->id;
            $data['songs'][] = array(
                'id'    =>  $song->id,
                'title'  =>  $song->title,
                'artist'  =>  $song->artist,
                'lyrics'  =>  $song->lyrics,
                'status'=>  $song->status,
                'user'  =>  User::with('songs')->find($song->user_id)->name,
                'date' => $song->created_at
            );
        }  
 
        // if (Request::ajax()) {
        //     if(Input::has('id')){
        //         $result = User::with('song')->find(Input::get('id'));
        //         return Response::json($result);
        //     }
        // }       
        $data['pagi'] = $findSongs->links();
        $data['section'] = 'Home Page'; 
        return view('dashboard.dashboard',$data);
    }
}
