<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $departments = Department::all();
        return view('auth.signup',['departments'=>$departments]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required',  Rules\Password::defaults()],
            'identification' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'department_id' => ['required', 'string', 'max:255'],
        ]);


        if($request->department_id == 1){
            if($request->email != 'has-his-kssh@moh.gov.sa')
            return redirect()->back()->with('error', 'يجب ادخال بريد الكتروني صحيح');

            if($request->identification != 'dep1$75')
            return redirect()->back()->with('error', 'يجب ادخال  اي دي صحيح');

        }

        else if($request->department_id == 2){
            if($request->email != 'has-md-kssh@moh.gov.sa')
            return redirect()->back()->with('error', 'يجب ادخال بربيد الكتروني صحيح');

            if($request->identification != 'dep2$75')
            return redirect()->back()->with('error', 'يجب ادخال  اي دي صحيح');
        }
        else if($request->department_id == 3){
            if($request->email != 'has-kssh-nsddon@moh.gov.sa')
            return redirect()->back()->with('error', 'يجب ادخال بربيد الكتروني صحيح');
            if($request->identification != 'dep3$75')
            return redirect()->back()->with('error', 'يجب ادخال  اي دي صحيح');
        }
        else if($request->department_id == 4){
            if($request->email != 'has-kssh-faa@moh.gov.sa')
            return redirect()->back()->with('error', 'يجب ادخال بربيد الكتروني صحيح');
            if($request->identification != 'dep4$75')
            return redirect()->back()->with('error', 'يجب ادخال  اي دي صحيح');
        }
        else if($request->department_id == 5){
            if($request->email != 'has-hr-kssh@moh.gov.sa')
            return redirect()->back()->with('error', 'يجب ادخال بربيد الكتروني صحيح');
            if($request->identification != 'dep5$75')
            return redirect()->back()->with('error', 'يجب ادخال  اي دي صحيح');


        }
        else if($request->department_id == 6){
            if($request->email != 'has-kssh-nd@moh.gov.saa')
            return redirect()->back()->with('error', 'يجب ادخال بربيد الكتروني صحيح');
            if($request->identification != 'dep6$75')
            return redirect()->back()->with('error', 'يجب ادخال  اي دي صحيح');

        }
        else if($request->department_id == 7){
            if($request->email != 'has-engd-kssh@moh.gov.sa')
            return redirect()->back()->with('error', 'يجب ادخال بربيد الكتروني صحيح');
            if($request->identification != 'dep7$75')
            return redirect()->back()->with('error', 'يجب ادخال  اي دي صحيح');

        }
        else if($request->department_id == 8){
            if($request->email != 'has-it-kssh@moh.gov.sa')
            return redirect()->back()->with('error', 'يجب ادخال بربيد الكتروني صحيح');
            if($request->identification != 'dep8$75')
            return redirect()->back()->with('error', 'يجب ادخال  اي دي صحيح');

        }
        else if($request->department_id == 9){
            if($request->email != 'has-kssh-mss@moh.gov.sa')
            return redirect()->back()->with('error', 'يجب ادخال بربيد الكتروني صحيح');
            if($request->identification != 'dep9$75')
            return redirect()->back()->with('error', 'يجب ادخال  اي دي صحيح');

        }
        else if($request->department_id == 10){
            if($request->email != 'has-kssh-tqm@moh.gov.sa')
            return redirect()->back()->with('error', 'يجب ادخال بربيد الكتروني صحيح');
            if($request->identification != 'dep10$75')
            return redirect()->back()->with('error', 'يجب ادخال  اي دي صحيح');

        }
        else if($request->department_id == 11){
            if($request->email != 'has-kssh-rm@moh.gov.sa')
            return redirect()->back()->with('error', 'يجب ادخال بربيد الكتروني صحيح');
            if($request->identification != 'dep11$75')
            return redirect()->back()->with('error', 'يجب ادخال  اي دي صحيح');

        }
        else if($request->department_id == 12){
            if($request->email != 'has-kssh-icd@moh.gov.sa')
            return redirect()->back()->with('error', 'يجب ادخال بربيد الكتروني صحيح');
            if($request->identification != 'dep12$75')
            return redirect()->back()->with('error', 'يجب ادخال  اي دي صحيح');

        }
        else if($request->department_id == 13){
            if($request->email != 'has-kssh-call937@moh.gov.sa')
            return redirect()->back()->with('error', 'يجب ادخال بربيد الكتروني صحيح');
            if($request->identification != 'dep13$75')
            return redirect()->back()->with('error', 'يجب ادخال  اي دي صحيح');

        }
        else if($request->department_id == 14){
            if($request->email != 'has-kssh-aps@moh.gov.sa')
            return redirect()->back()->with('error', 'يجب ادخال بربيد الكتروني صحيح');
            if($request->identification != 'dep14$75')
            return redirect()->back()->with('error', 'يجب ادخال  اي دي صحيح');

        }
        else if($request->department_id == 15){
            if($request->email != 'has-legal-kssh@moh.gov.sa')
            return redirect()->back()->with('error', 'يجب ادخال بربيد الكتروني صحيح');
            if($request->identification != 'dep15$75')
            return redirect()->back()->with('error', 'يجب ادخال  اي دي صحيح');

        }
        else if($request->department_id == 16){
            if($request->email != 'has-kssh-train@moh.gov.sa')
            return redirect()->back()->with('error', 'يجب ادخال بربيد الكتروني صحيح');
            if($request->identification != 'dep16$75')
            return redirect()->back()->with('error', 'يجب ادخال  اي دي صحيح');

        }
        else if($request->department_id == 17){
            if($request->email != 'Khaldology@gmail.com')
            return redirect()->back()->with('error', 'يجب ادخال بربيد الكتروني صحيح');
            if($request->identification != 'dep17$75')
            return redirect()->back()->with('error', 'يجب ادخال  اي دي صحيح');

        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'identification' => $request->identification,
            'phone' => $request->phone,
            'department_id' => $request->department_id,
            'password' => Hash::make($request->password),
        ]);




        event(new Registered($user));

        Auth::login($user);
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
        //return redirect(RouteServiceProvider::HOME);
    }
}
