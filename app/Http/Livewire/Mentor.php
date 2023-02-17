<?php

namespace App\Http\Livewire;

use App\Mail\Mentor as MailMentor;
use App\Models\Mentor as ModelsMentor;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class Mentor extends Component
{
    public function render()
    {
        return view('livewire.mentor');
    }
 
    public $work_status,$email,$fullname,$phone,$gender,$describes,$family,$location,$age,$area_in_mentor,$level_of_education,
    $work_experience,$have_you_been_a_mentor_before,$mentoring_experience,$professional_experience,$accomplishment,$goals_and_objectives,
    $want_to_be_a_mentor,$additional_information,$skill,$indicate, $contact_with_your_mentee;
    

    protected function rules()
    {
        return [
            'email'=>['required','email'],
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
        ];
    }

    protected $messages = [
        'email.required' => 'The Email Address cannot be empty.',
        'email.email' => 'The Email Address format is not valid.',
        'fullname.required' => 'Enter your Full Name',
        'phone.required' => 'Enter your phone number',
        'gender'=> 'This field is required',
        'describes'=> 'This field is required',
        'family'=> 'This field is required',
        'location'=> 'This field is required',
        'age'=> 'This field is required',
        'area_in_mentor'=> 'This field is required',
        'work_status'=> 'This field is required',
        'level_of_education'=> 'This field is required',
        'work_experience'=> 'This field is required',
        'have_you_been_a_mentor_before'=> 'This field is required',
        'mentoring_experience'=> 'This field is required',
        'professional_experience'=> 'This field is required',
        'accomplishment'=> 'This field is required',
        'goals_and_objectives'=> 'This field is required',
        'want_to_be_a_mentor'=> 'This field is required',
        'additional_information'=> 'This field is required',
        'skill'=> 'This field is required',
        'indicate'=> 'This field is required',
        'contact_with_your_mentee'=> 'This field is required'
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function resetInput(){
       $this->work_status = '';
       $this->email = '';
       $this->fullname = '';
       $this->phone = '';
       $this->gender = '';
       $this->describes = '';
       $this->family = '';
       $this->location = '';
       $this->age = '';
       $this->area_in_mentor = '';
       $this->level_of_education = '';
       $this->work_experience = '';
       $this->have_you_been_a_mentor_before = '';
       $this->mentoring_experience = '';
       $this->professional_experience = '';
       $this->accomplishment = '';
       $this->goals_and_objectives = '';
       $this->want_to_be_a_mentor = '';
       $this->additional_information = '';
       $this->skill = '';
       $this->indicate = ''; 
       $this->contact_with_your_mentee = '';
    }

    public function store(){

        $validatedData = $this->validate();
        // dd($validatedData);
        $mentor = ModelsMentor::create($validatedData);
        Mail::to('gritinai@gmail.com')->send(new MailMentor($mentor));
        $this->resetInput();
        session()->flash('message', 'Successfully Send.');
        // Alert::info('success',  'Send Successful');
        return redirect()->to('/mentor');
    }
}
