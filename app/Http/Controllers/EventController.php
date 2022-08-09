<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();
        return view('welcome', ['events' => $events]);
    }

    public function create(){
        return view('events.create');
    }

    public function store(Request $request){
        $event = new Event();

        if($request->hasFile('image') && $request->file('image')->isValid()){
            
            $requestImage = $request->file('image');

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now') . $extension);
            
            $requestImage->move('./public-img', $imageName);

            $event->image = $imageName;
        }

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        $event->save();

        return redirect('/')->with('msg-success', 'Sucesso na criação do evento!');
    }

    public function show($id){
        
        $event = Event::findOrFail($id);

        return view('events.show', ['event' => $event]);

    }
}
