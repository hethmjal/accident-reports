<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\User;
use App\Models\Event;
use App\Notifications\NewEventNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OVRController extends Controller
{

    public function index()
    {
        return view('enter');
    }



    // function to store events
    public function store(Request $request)
    {

     $request->merge(['status' => 0]);

       $event = Event::create($request->all());

       $message = [
        'title'=>'New Event',
        'body'=> 'New Event Created',
        'action'=>'/risk-manager/report/'.$event->id,
        'status'=>'new order',
        'created_at'=> $event->created_at->diffForHumans(),
        'event_id'=>$event->id,
        'event'=>$event,

    ];
    $dep = Department::where('name','المخاطر')->first();
    $user = User::where('department_id',$dep->id)->first();
       $user->notify(new NewEventNotification($message));
       return $event;
    }

}
