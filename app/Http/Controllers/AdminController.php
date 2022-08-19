<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function reset_account_page()
    {
        if (Auth::user()->department_id != 17) {
            return redirect()->back();
        }
        $departments = Department::get();
        return view('ResetAccount',['departments'=>$departments]);

    }

    public function reset_account(Request $request)
    {
        if (Auth::user()->department_id != 17) {
            return redirect()->back();
        }
        $id = "admin75@75";

        if ($request->id != $id) {
            return "id error";
        } else{

        $user = User::where([
            ['email',$request->email],
            ['phone',$request->phone],
            ['department_id',$request->department_id],

        ])->first();

        if ($user) {
            $user->password = Hash::make($request->password);
            $user->save();
            return 'success';
        }else{
            return "filed data";
        }
    }

    }

    public function ok (){
        if (Auth::user()->department_id == 17) {
            return redirect()->route('reset-account');
        }
        else if (Auth::user()->department_id == 11) {
            return redirect()->route('riskmanager.index');
        }
         else if (Auth::user()->department_id == 10) {
            return redirect()->route('QM');
        }
        else {
            return redirect()->route('indexManagment');

        }
    }

}
