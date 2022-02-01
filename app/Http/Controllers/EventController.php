<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Event;
use App\User;

class EventController extends Controller
{
    
    public function index() {
    

        $search = request('search');

        if($search) {

            $events = Event::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();

        } else {
            $events = Event::all();
        }        
    
        return view('index',['events' => $events, 'search' => $search]);

    }
  



    public function create() {
        return view('/events/create');
    }
  
   
    public function store(Request $request) {

        $event = new Event;

        $event->title = $request->title;
        $event->date = $request->date;
        $event->description = $request->description;
        $event->city = $request->city;
        $event->items = $request->items;
        
        $user = auth()->user();
        $event->user_id = $user->id;
        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');

    }
    public function show($id) {

        $event = Event::findOrFail($id);

        $eventOwner = User::where('id', $event->user_id)->first()->toArray();

        return view('events.show', ['event' => $event, 'eventOwner' => $eventOwner]);
        
        
    }
    public function dashboard() {

        $user = auth()->user();

        $events = $user->events;

        return view('dashboard', ['events' => $events]);

    }
    

}