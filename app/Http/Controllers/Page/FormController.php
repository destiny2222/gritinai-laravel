<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Mail\Mentor as MailMentor;
use App\Models\Mentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class FormController extends Controller
{
    //

    public function StoreMentor(Request  $request){
        $request->validate([
            'email'=>['required','string','email'],
            'fullname'=>['required','string'],
            'phone'=>['required','string'],
            'gender'=>['required','string'],
            'describes'=>['required','string'],
            'family'=>['required','string'],
            'location'=>['required','string'],
            'age'=>['required','string'],
            'area_in_mentor'=>['required','string'],
            'work_status'=>['required','string'],
            'level_of_education'=>['required','string'],
            'work_experience'=>['required','string'],
            'have_you_been_a_mentor_before'=>['required','string'],
            'mentoring_experience'=>['required','string'],
            'professional_experience'=>['required','string'],
            'accomplishment'=>['required','string'],
            'goals_and_objectives'=>['required','string'],
            'want_to_be_a_mentor'=>['required','string'],
            'additional_information'=>['required','string'],
            'skill'=>['required','string'],
            'indicate'=>['required','string'],
            'contact_with_your_mentee'=>['required','string'],       
         ]);
         dd($request->all());
         try{
            
            session(['email'=>$request->email]);
            session(['fullname'=>$request->fullname]);
            session(['phone'=>$request->phone]);
            session(['gender'=>$request->gender]);
            session(['describes'=>$request->describes]);
            session(['family'=>$request->family]);
            session(['location'=>$request->location]);
            session(['age'=>$request->age]);
            session(['area_in_mentor'=>$request->area_in_mentor]);
            session(['work_status'=>$request->work_status]);
            session(['level_of_education'=>$request->level_of_education]);
            session(['work_experience'=>$request->work_experience]);
            session(['have_you_been_a_mentor_before'=>$request->have_you_been_a_mentor_before]);
            session(['mentoring_experience'=>$request->mentoring_experience]);
            session(['professional_experience'=>$request->professional_experience]);
            session(['accomplishment'=>$request->accomplishment]);
            session(['goals_and_objectives'=>$request->goals_and_objectives]);
            session(['want_to_be_a_mentor'=>$request->want_to_be_a_mentor]);
            session(['additional_information'=>$request->additional_information]);
            session(['skill'=>$request->skill]);
            session(['indicate'=>$request->indicate]);
            session(['contact_with_your_mentee'=>$request->contact_with_your_mentee]);

            $mentor = Mentor::create(session()->all());
            Mail::to('gritinai@gmail.com')->send(new MailMentor($mentor));
            Alert::info('success',  'Send Successful');
            return back();
         }catch(\Exception $exception){
            Log::error($exception->getMessage());
            Alert::error('error', 'Something went worry');
            return back();
         }

    }
}
