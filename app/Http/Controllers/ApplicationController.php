<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class ApplicationController extends Controller
{

    public function getApply()
    {
        
        return Application::join('dbiusis16.degrees', function($join) {
            $join->on('apply_form.degree_id', '=', 'dbiusis16.degrees.id');
          })->where("user_id", Auth::user()->id)->get();

    }
 

    public function application(Request $request){

        $new_application = new Application;

        $new_application->user_id = Auth::user()->id;
        $new_application->present_occupation = $request->presentoccupation;
        $new_application->employer = $request->employer;
        $new_application->business_address = $request->businessaddress;
        $new_application->academic_background = $request->academicbackground;
        $new_application->degree_id = $request->degree;
        $new_application->opportunity = $request->opportunity;
        $new_application->semester_applying = $request->applying;
        $new_application->previously_applied = $request->previousapply;
        $new_application->date_submitted = $request->datesubmitted;
        $new_application->it_was = $request->itwas;
        $new_application->occupational_experience = $request->experience;
        $new_application->membership_honor = $request->honor;
        $new_application->scholarship = $request->scholarship;
        $new_application->publications = $request->publications;
        $new_application->unpublished = $request->unpublished;
        $new_application->recommend = $request->recommend;
        $new_application->future_plans = $request->futureplan;

        $res = $new_application->save();


        // dd ($new_application);

        return $res;


    }

}

?>
