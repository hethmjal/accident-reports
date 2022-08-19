<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QMController extends Controller
{
    public function index()
    {
        if (Auth::user()->department_id != 10) {
            return redirect()->back();
        }
        $events = Event::where('status',2)->latest()->get();
        return view('indexQM',['events'=>$events]);
    }
}
