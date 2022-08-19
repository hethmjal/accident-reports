<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\EventInfo;
use App\Models\EventUser;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\NewEventNotification;

class RiskManagerController extends Controller
{
    function index()
    {
        if (Auth::user()->department_id != 11) {
            return redirect()->back();
        }
        $departments = Department::all();
        $events = Event::latest()->get();
        return view('index',['departments'=>$departments,'events'=>$events]);
    }

    public function shareReport($id)
    {
        if (Auth::user()->department_id != 11) {
            return redirect()->back();
        }
        $event = Event::find($id);
        $departments = Department::all();
        return view('sharereport',['event'=>$event,'departments'=>$departments]);
    }


    public function shareReportWithDepartment(Request $request)
    {
        if (Auth::user()->department_id != 11) {
            return redirect()->back();
        }
       // return "OKKKKKKKKK";
        $user = User::where('department_id',$request->department_id)->first();
        $dep = Department::find($request->department_id);
        $event_user = EventUser::where([
            'user_id'=>$user->id,
            'event_id'=>$request->event_id
        ])->first();
        $event = Event::find($request->event_id);
        $message = [
            'title'=>'New Event',
            'body'=> 'New Event Created',
            'action'=>'/commentreport/'.$event->id,
            'status'=>'new order',
            'created_at'=> $event->created_at->diffForHumans(),
            'event_id'=>$event->id,
            'event'=>$event,

        ];
        if ($event_user) {
            return $dep;
        } else {
            EventUser::create([
                'user_id'=>$user->id,
                'event_id'=>$request->event_id
            ]);
            $user->notify(new NewEventNotification($message));
            return $dep;
        }


    }


    public function addinforeport($event_id)
    {
        if (Auth::user()->department_id != 11) {
            return redirect()->back();
        }

        $event = Event::find($event_id);
       // return  ;
        return view('addinforeport',['event'=>$event]);
    }


    public function store_info(Request $request)
    {
        if (Auth::user()->department_id != 11) {
            return redirect()->back();
        }
       // return $request->all();
       if ($request->impact == '1') {
           $impact_string = 'Nigligible';
           $impact_color = 'rgb(255, 255, 255)';

       } else if ($request->impact == '2'){
        $impact_string = 'Minor';
        $impact_color = 'rgb(8, 200, 27)';
       }else if ($request->impact == '3'){
        $impact_string = 'Moderate';
        $impact_color = 'rgb(246, 249, 40)';

       }else if ($request->impact == '4'){
        $impact_string = 'Maior';
        $impact_color = 'rgb(254, 145, 3)';

       }else if ($request->impact == '5'){
             $impact_string = 'Catatstrophic';
             $impact_color = 'rgb(238, 0, 0)';

       }

       if ($request->likelihood == '1') {
        $likelihood_string = 'Rare';
        $likelihood_color = 'rgb(255, 255, 255)';

        } else if ($request->likelihood == '2'){
        $likelihood_string = 'Unlikely';
        $likelihood_color = 'rgb(8, 200, 27)';
        }else if ($request->likelihood == '3'){
        $likelihood_string = 'Possible';
        $likelihood_color = 'rgb(246, 249, 40)';

        }else if ($request->likelihood == '4'){
        $likelihood_string = 'Likely';
        $likelihood_color = 'rgb(254, 145, 3)';

        }else if ($request->likelihood == '5'){
            $likelihood_string = 'Likely';
            $likelihood_color = 'rgb(238, 0, 0)';
    }

    $res = $request->impact * $request->likelihood;
    $result_color = "";
    if ($res =="4" || $res =="5" || $res =="6") {
        $result_color = 'rgb(246, 249, 40)';
        $result_string = 'Moderate Risk';
      }

     else if ($res =="1" || $res =="2" || $res =="3") {
      $result_color = 'rgb(8, 200, 27)';
      $result_string = 'Low Risk';
      }

      else if ($res =="8" || $res =="9" || $res =="10"|| $res=="11" || $res=="12") {
          $result_color = 'rgb(254, 145, 3)';
          $result_string = 'High Risk';
      }

      else if ($res =="15" || $res =="16" || $res =="17"|| $res=="18" ||$res =="19"
      || $res =="20" || $res =="21"|| $res=="22" || $res =="23" || $res =="24" || $res =="25") {
          $result_color = 'rgb(238, 0, 0)';
          $result_string = 'Extreme Risk';
      }

        $event = Event::find($request->event_id);
        $info = EventInfo::where('event_id',$request->event_id)->first();
        if ($info) {
            $info->event_category = $request->event_category;
            $info->eventReceivedinTheRiskUnitWithin = $request->eventReceivedinTheRiskUnitWithin;
            $info->feedbackReceivedWithInAppropriateTime = $request->feedbackReceivedWithInAppropriateTime;
            $info->feedbackSentToReportingDepartment = $request->feedbackSentToReportingDepartment;
            $info->IncidentAddedToTheRiskRegister = $request->IncidentAddedToTheRiskRegister;
            $info->likelihood_string = $likelihood_string;
            $info->likelihood_num = $request->likelihood;
            $info->likelihood_color = $likelihood_color;
            $info->impact_string = $impact_string;
            $info->impact_num = $request->impact;
            $info->impact_color = $impact_color;
            $info->result_color = $result_color;
            $info->result_string = $result_string;
            $info->status = 1;
            $info->save();
            $event->status = 2;
            $event->save();
            return $info;
        } else {
           $i =  EventInfo::create([
                'event_id'=>$request->event_id,
                'event_category'=>$request->event_category,
                'eventReceivedinTheRiskUnitWithin'=>$request->eventReceivedinTheRiskUnitWithin,
                'feedbackReceivedWithInAppropriateTime'=>$request->feedbackReceivedWithInAppropriateTime,
                'feedbackSentToReportingDepartment'=>$request->feedbackSentToReportingDepartment,
                'IncidentAddedToTheRiskRegister'=>$request->IncidentAddedToTheRiskRegister,
                'likelihood_string'=>$likelihood_string,
                'likelihood_num'=>$request->likelihood,
                'likelihood_color'=>$likelihood_color,
                'impact_string'=>$impact_string,
                'impact_num'=>$request->impact,
                'impact_color'=>$impact_color,
                'result_color'=>$result_color,
                'result_string'=>$result_string,
                'status'=>1,
            ]);
            $event->status = 2;
            $event->save();
            return $i;
        }

    }


    public function save_info(Request $request)
    {
        if (Auth::user()->department_id != 11) {
            return redirect()->back();
        }

        $event = Event::find($request->event_id);
        $info = EventInfo::where('event_id',$request->event_id)->first();
        if ($request->impact == '1') {
            $impact_string = 'Nigligible';
            $impact_color = 'rgb(255, 255, 255)';

        } else if ($request->impact == '2'){
         $impact_string = 'Minor';
         $impact_color = 'rgb(8, 200, 27)';
        }else if ($request->impact == '3'){
         $impact_string = 'Moderate';
         $impact_color = 'rgb(246, 249, 40)';

        }else if ($request->impact == '4'){
         $impact_string = 'Maior';
         $impact_color = 'rgb(254, 145, 3)';

        }else if ($request->impact == '5'){
              $impact_string = 'Catatstrophic';
              $impact_color = 'rgb(238, 0, 0)';

        }

        if ($request->likelihood == '1') {
         $likelihood_string = 'Rare';
         $likelihood_color = 'rgb(255, 255, 255)';

         } else if ($request->likelihood == '2'){
         $likelihood_string = 'Unlikely';
         $likelihood_color = 'rgb(8, 200, 27)';
         }else if ($request->likelihood == '3'){
         $likelihood_string = 'Possible';
         $likelihood_color = 'rgb(246, 249, 40)';

         }else if ($request->likelihood == '4'){
         $likelihood_string = 'Likely';
         $likelihood_color = 'rgb(254, 145, 3)';

         }else if ($request->likelihood == '5'){
             $likelihood_string = 'Likely';
             $likelihood_color = 'rgb(238, 0, 0)';
     }

     $res = $request->impact * $request->likelihood;
     $result_color = "";
     if ($res =="4" || $res =="5" || $res =="6") {
       $result_color = 'rgb(246, 249, 40)';
       $result_string = 'Moderate Risk';
     }

    else if ($res =="1" || $res =="2" || $res =="3") {
     $result_color = 'rgb(8, 200, 27)';
     $result_string = 'Low Risk';
     }

     else if ($res =="8" || $res =="9" || $res =="10"|| $res=="11" || $res=="12") {
         $result_color = 'rgb(254, 145, 3)';
         $result_string = 'High Risk';
     }

     else if ($res =="15" || $res =="16" || $res =="17"|| $res=="18" ||$res =="19"
     || $res =="20" || $res =="21"|| $res=="22" || $res =="23" || $res =="24" || $res =="25") {
         $result_color = 'rgb(238, 0, 0)';
         $result_string = 'Extreme Risk';
     }

        if ($info) {
            $info->event_category = $request->event_category;
            $info->eventReceivedinTheRiskUnitWithin = $request->eventReceivedinTheRiskUnitWithin;
            $info->feedbackReceivedWithInAppropriateTime = $request->feedbackReceivedWithInAppropriateTime;
            $info->feedbackSentToReportingDepartment = $request->feedbackSentToReportingDepartment;
            $info->IncidentAddedToTheRiskRegister = $request->IncidentAddedToTheRiskRegister;
            $info->likelihood_string = $likelihood_string;
            $info->likelihood_num = $request->likelihood;
            $info->likelihood_color = $likelihood_color;
            $info->impact_string = $impact_string;
            $info->impact_num = $request->impact;
            $info->impact_color = $impact_color;
            $info->result_color = $result_color;
            $info->result_string = $result_string;
            $info->status = 0;
            $info->save();
            return $info;
        } else {
           $info =  EventInfo::create([
                'event_id'=>$request->event_id,
                'event_category'=>$request->event_category,
                'eventReceivedinTheRiskUnitWithin'=>$request->eventReceivedinTheRiskUnitWithin,
                'feedbackReceivedWithInAppropriateTime'=>$request->feedbackReceivedWithInAppropriateTime,
                'feedbackSentToReportingDepartment'=>$request->feedbackSentToReportingDepartment,
                'IncidentAddedToTheRiskRegister'=>$request->IncidentAddedToTheRiskRegister,
                'likelihood_string'=>$likelihood_string,
                'likelihood_num'=>$request->likelihood,
                'likelihood_color'=>$likelihood_color,
                'impact_string'=>$impact_string,
                'impact_num'=>$request->impact,
                'impact_color'=>$impact_color,
                'result_color'=>$result_color,
                'result_string'=>$result_string,
                'status'=>0,
            ]);

            return $info;
        }

    }



    public function final_report($event_id)
    {
        if (Auth::user()->department_id != 11 && Auth::user()->department_id != 10) {
            return redirect()->back();
        }

        $event = Event::find($event_id);

        return view('finalreport',['event'=>$event]);
    }




}
