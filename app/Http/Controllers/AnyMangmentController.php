<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventNote;
use App\Models\EventUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnyMangmentController extends Controller
{
    function index()
    {
        if (Auth::user()->department_id == 11 || Auth::user()->department_id == 10 || Auth::user()->department_id == 17 ) {
            return redirect()->back();
        }
        $events = EventUser::where('user_id',auth()->user()->id)->get();

        return view('indexManagment',['events'=>$events]);
    }

    function commentreport($event_id)
    {
        if (Auth::user()->department_id == 11 || Auth::user()->department_id == 10 || Auth::user()->department_id == 17 ) {
            return redirect()->back();
        }
        $event = EventUser::where('user_id',auth()->user()->id)->where('event_id',$event_id)->first();
        return view('commentreport',['event'=>$event->event]);
    }


    function send_comment(Request $request)
    {
        if (Auth::user()->department_id == 11 || Auth::user()->department_id == 10 || Auth::user()->department_id == 17 ) {
            return redirect()->back();
        }

        $event = Event::find($request->event_id);

        $note = EventNote::where('event_id',$request->event_id)->where('user_id',auth()->user()->id)->first();
        if ($note) {
            $note->note = $request->note;
            $note->status = 1;

            $note->save();
            $event->status = 1;
            $event->save();
            return $note;
        } else {

       $note = EventNote::create([
        'event_id'=>$request->event_id,
        'user_id'=>auth()->user()->id,
        'status'=>1,
        'note'=>$request->note
        ]);
        $event->status = 1;
        $event->save();
        return $note;
        }

    }

    function save_comment(Request $request)
    {
        if (Auth::user()->department_id == 11 || Auth::user()->department_id == 10 || Auth::user()->department_id == 17 ) {
            return redirect()->back();
        }

        $event = Event::find($request->event_id);

        $note = EventNote::where('event_id',$request->event_id)->where('user_id',auth()->user()->id)->first();
        if ($note) {
            $note->note = $request->note;
            $note->save();

            return $note;
        } else {

       $note = EventNote::create([
        'event_id'=>$request->event_id,
        'user_id'=>auth()->user()->id,
        'status'=>0,
        'note'=>$request->note
        ]);
        $event->status = 0;
        $event->save();
        return $note;
        }

    }

    public function final_report($event_id)
    {
        if (Auth::user()->department_id == 11 || Auth::user()->department_id == 10 || Auth::user()->department_id == 17 ) {
            return redirect()->back();
        }
        
        $event = EventUser::where('user_id',auth()->user()->id)->where('event_id',$event_id)->first();
        return view('finalManagmentreport',['event'=>$event->event]);
    }


}
